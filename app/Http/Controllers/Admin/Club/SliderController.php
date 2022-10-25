<?php

namespace App\Http\Controllers\Admin\Club;

use App\Photo;
use App\Slider;
use App\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{

    //  // Construct Function 
    public function __construct()
    {
//        $this->middleware(['auth', 'clearance']);
        $this->middleware('auth');
    }

    // Create Function
    public function create()
    {
        return view('admin.club.slider.create', ['title' => 'افزودن اسلایدر']);
    }

    // Index Function
    public function index()
    {
        $items = Slider::where('for' , 2)->orwhere('for' , 3)->get();
        return view('admin.club.slider.index', compact('items'), ['title' => 'اسلایدر ها']);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sort_id' => 'required',
            'title' => 'required',
            'url' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = Slider::create([
                'sort_id' => $request->sort_id,
                'title' => $request->title,
                'url' => $request->url,
                'for' => $request->for
            ]);
            if ($request->hasFile('photo')) {
                $photo = new Photo();
                $photo->path = file_store($request->photo, 'includes/asset/uploads/sliders/photos/', 'photo-');;
                $item->photo()->save($photo);
            }
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'store';
            $activity->text = ' اسلایدر : ' . '(' . $request->title . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect('admin/club-slider')->with(['status' => 'success', "message" => 'اسلایدر با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id)
    {
        $item = Slider::find($id);
        return view('admin.club.slider.edit', compact('item'), ['title' => $item->title]);
    }

    // Update Function
    public function update(Request $request, $id)
    {
        $item = Slider::find($id);
        $old_title = $item->title;
        $validator = Validator::make($request->all(), [
            'sort_id' => 'required',
            'title' => 'required',
            'url' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->sort_id = $request->sort_id;
            $item->title = $request->title;
            $item->url = $request->url;
            $item->for = $request->for;
            $item->save();
            if ($request->hasFile('photo')) {
                if ($item->photo) {
                    $old_path = $item->photo->path;
                    File::delete($old_path);
                    $item->photo->delete();
                    $photo = new Photo();
                    $photo->path = file_store($request->photo, 'includes/asset/uploads/sliders/photos/', 'photo-');;
                    $item->photo()->save($photo);
                } else {
                    $photo = new Photo();
                    $photo->path = file_store($request->photo, 'includes/asset/uploads/sliders/photos/', 'photo-');;
                    $item->photo()->save($photo);
                }
            }
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'update';
            $activity->text = ' اسلایدر : ' . '(' . $old_title . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect('admin/club-slider')->with(['status' => 'success', "message" => 'اسلایدر با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Destroy Function
    public function destroy($id)
    {
        $item = Slider::find($id);
        $old_title = $item->title;
        try {
            $item->delete();
            $activity = new Activity();
            $activity->user_id = Auth::user()->id;
            $activity->type = 'delete';
            $activity->text = ' اسلایدر : ' . '(' . $old_title . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect('admin/club-slider')->with(['status' => 'success', "message" => 'اسلایدر با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect('admin/club-slider')->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

}
