<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Models\Lang;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Models\ProjectsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProjectsCategoryController extends Controller {

    // Construct Function
    public function __construct() {
        $this->middleware('auth');
    }

    // Create Function
    public function create() {
        return view('admin.projects-category.create', ['title' => 'افزودن دسته بندی پروژه ها']);
    }

    // Store Function
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'      => 'required', 
            'name_en'   => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }

        try {
            $item = new ProjectsCategory();
            $item->name     = $request->name;
            $item->name_en  = $request->name_en;
            $item->save();

            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'store';
            $activity->text = ' دسته بندی پروژه ها : ' . '(' . $request->name . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect()->route('projects-category.index')->with(['status' => 'success', "message" => ' با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id) {
        $item = Partner::find($id);
        return view('admin.projects-category.edit', compact('item'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request, $id) {
        $item = ProjectsCategory::find($id);
        $old_name = $item->name;
        $validator = Validator::make($request->all(), [
            'name'      => 'required', 
            'name_en'   => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {
            $item->name     = $request->name;
            $item->name_en  = $request->name_en;
            if ($request->sort_id) $item->sort_id   = $request->sort_id;
            if ($request->status) $item->status     = $request->status;
            $item->save();

            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'update';
            $activity->text = ' همکاران ما : ' . '(' . $old_name . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect()->route('projects-category.index')->with(['status' => 'success', "message" => ' با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index() {
        $items = ProjectsCategory::orderBy('id', 'DESC')->get();
        return view('admin.projects-category.index', compact('items'), ['title' => 'دسته بندی پروژه ها']);
    }

    // Destroy Function
    public function destroy($id) {
        $item = ProjectsCategory::findOrFail($id);
        $old_name = $item->name;
        try {
            if (\App\Models\Project::where('cat_id',$item->id)->count()) {
                return redirect()->back()->with(['status' => 'danger-600', "message" => 'دسته دارای پروژه میباشد , غیرقابل حذف میباشد.']);
            } else {
                $item->delete();
            }
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'delete';
            $activity->text = ' دسته بندی پروژه ها : ' . '(' . $old_name . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => ' با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

}
