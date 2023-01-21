<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Models\Lang;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Models\Galery;
use App\Models\Project;
use App\Models\ProjectsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller {

    // Construct Function
    public function __construct() {
        $this->middleware('auth');
    }

    // Create Function
    public function create($id=null) {
        $items = ProjectsCategory::all();
        return view('admin.project.create', compact('id','items'), ['title' => 'افزودن پروژه']);
    }

    // Store Function
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'cat_id'        => 'required',
            'title'         => 'required',
            'employer'      => 'required', 
            'capacity'      => 'required', 
            'place'         => 'required', 
            'text'          => 'required', 
            'title_en'      => 'required', 
            'employer_en'   => 'required', 
            'capacity_en'   => 'required',
            'place_en'      => 'required', 
            'text_en'       => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }

        try {
            $item = new Project();
            $item->cat_id       = $request->cat_id;
            $item->title        = $request->title;
            $item->title_en     = $request->title_en;
            $item->employer     = $request->employer;
            $item->employer_en  = $request->employer_en;
            $item->capacity     = $request->capacity;
            $item->capacity_en  = $request->capacity_en;
            $item->place        = $request->place;
            $item->place_en     = $request->place_en;
            $item->text         = $request->text;
            $item->text_en      = $request->text_en;
            $item->save();

            if ($request->hasFile('photos')) {
                foreach ($request->photos as $image) {
                    // $photo = new Galery();
                    // $photo->model_name = 'Project';
                    // $photo->item_id = $item->id;

                    // $imageName = time().'.'.$image->extension();

                    // // Public Folder
                    // $image->move(asset('images'), $imageName);

                    // $photo->path = $imageName;
                    // dd($imageName , $photo);
                    // $photo->save();



                    $photo = new Photo();
                    $photo->path = file_store($image, 'includes/asset/uploads/project/photos/', 'image-');
                    $item->photo()->save($photo);
                }
            }

            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'store';
            $activity->text = ' پروژه : ' . '(' . $request->title . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect()->route('project.index')->with(['status' => 'success', "message" => ' با موفقیت ثبت شد.']);
            // return redirect()->route('project.edit',$item->id)->with(['status' => 'success', "message" => ' با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id) {
        $item = Project::find($id);
        $items = ProjectsCategory::all();
        return view('admin.project.edit', compact('item','items'), ['title' => $item->title]);
    }

    // Update Function
    public function update(Request $request, $id) {
        $item = Project::find($id);
        $old_name = $item->title;
        $validator = Validator::make($request->all(), [
            'cat_id'        => 'required',
            'title'         => 'required',
            'employer'      => 'required', 
            'capacity'      => 'required', 
            'place'         => 'required', 
            'text'          => 'required', 
            'title_en'      => 'required', 
            'employer_en'   => 'required', 
            'capacity_en'   => 'required',
            'place_en'      => 'required', 
            'text_en'       => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->cat_id       = $request->cat_id;
            $item->title        = $request->title;
            $item->title_en     = $request->title_en;
            $item->employer     = $request->employer;
            $item->employer_en  = $request->employer_en;
            $item->capacity     = $request->capacity;
            $item->capacity_en  = $request->capacity_en;
            $item->place        = $request->place;
            $item->place_en     = $request->place_en;
            $item->text         = $request->text;
            $item->text_en      = $request->text_en;
            if ($request->sort_id) $item->sort_id   = $request->sort_id;
            if ($request->status) $item->status     = $request->status;
            $item->save();

            if ($request->hasFile('photo')) {
                if ($item->photo) File::delete($item->photo);
                $item->photo = file_store($request->photo, 'includes/asset/uploads/Partner/photos/', 'photo-');;
            }
            
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'update';
            $activity->text = ' همکاران ما : ' . '(' . $old_name . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect()->route('project.index')->with(['status' => 'success', "message" => ' با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index() {
        $items = Project::orderBy('id', 'DESC')->get();
        return view('admin.project.index', compact('items'), ['title' => 'پروژه ها']);
    }

    // Filter Using Category ID Function
    public function show($id) {
        $item  = ProjectsCategory::findOrFail($id);
        $id    = $item->id;
        $items = Project::where('cat_id',$id)->orderBy('id', 'DESC')->get();
        return view('admin.project.index', compact('id','items'), ['title' => $item->name.' پروژه های دسته ']);
    }

    // Destroy Function
    public function destroy($id) {
        $item = Project::findOrFail($id);
        $old_name = $item->title;
        // if ($item->photo) File::delete($item->photo);
        try {
            $item->delete();
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'delete';
            $activity->text = ' پروژه : ' . '(' . $old_name . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => ' با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

     // Update Function
    public function galery(Request $request) {
        $item = Project::findOrFail($request->id);
        try {
            if ($request->hasFile('photos')) {

                // $photo = new Galery();
                // $photo->model_name = 'Project';
                // $photo->item_id = $item->id;
                // $name = time().'.'.$request->photos->extension();
                // $request->photos->move(asset('/uploads/project/photos/'), $name);
                // $photo->path = $name;
                // // $photo->path = file_store($request->photos, 'includes/asset/uploads/project/photos/', 'photo-');
                // $photo->save();

                $photo = new Photo();
                $photo->path = file_store($request->photos, 'includes/asset/uploads/project/photos/', 'image-');
                $item->photo()->save($photo);
            }
            return redirect()->back()->with(['status' => 'success', "message" => ' با موفقیت اضافه شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

}
