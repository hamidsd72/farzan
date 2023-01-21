<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Models\Lang;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller {

    // Construct Function
    public function __construct() {
        $this->middleware('auth');
    }

    // Create Function
    public function create() {
        return view('admin.partner.create', ['title' => 'افزودن همکاران ما']);
    }

    // Store Function
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'name_en' => 'required',
            'photo'   => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }

        try {
            $item = new Partner();
            $item->name = $request->name;
            $item->name_en = $request->name_en;
            $item->flexbox = $request->flexbox;
            if ($request->hasFile('photo')) $item->photo = file_store($request->photo, 'includes/asset/uploads/Partner/photos/', 'photo-');
            $item->save();

            // store_lang($request,'partner',$item->id,['name']);

            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'store';
            $activity->text = ' همکاران ما : ' . '(' . $request->name . ')' . ' را ثبت کرد';
            $item->activity()->save($activity);
            return redirect('admin/partner-list')->with(['status' => 'success', "message" => ' با موفقیت ثبت شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Edit Function
    public function edit($id) {
        $item = Partner::find($id);
        return view('admin.partner.edit', compact('item'), ['title' => $item->name]);
    }

    // Update Function
    public function update(Request $request, $id) {
        $item = Partner::find($id);
        $old_name = $item->name;
        $validator = Validator::make($request->all(), [
            // 'sort_id' => 'required',
            'name' => 'required',
            'name_en' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        try {

            $item->name = $request->name;
            $item->name_en = $request->name_en;
            $item->flexbox = $request->flexbox;
            if ($request->sort_id) $item->sort_id = $request->sort_id;
            if ($request->status) $item->status = $request->status;

            if ($request->hasFile('photo')) {
                if ($item->photo) File::delete($item->photo);
                $item->photo = file_store($request->photo, 'includes/asset/uploads/Partner/photos/', 'photo-');;
            }
            $item->save();
            
            // if($item->langs)
            // {
            //     foreach ($item->langs as $lang){
            //         $lang->delete();
            //     }
            // }
            // store_lang($request,'partner',$item->id,['name']);
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'update';
            $activity->text = ' همکاران ما : ' . '(' . $old_name . ')' . ' را ویرایش کرد';
            $item->activity()->save($activity);
            return redirect('admin/partner-list')->with(['status' => 'success', "message" => ' با موفقیت ویرایش شد.']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

    // Index Function
    public function index() {
        $items = Partner::where('is_title', 'deactive')->orderBy('sort_id')->get();
        $partner = Partner::where('is_title', 'active')->first();
        return view('admin.partner.index', compact('partner','items'), ['title' => 'همکاران ما']);
    }

    // Destroy Function
    public function destroy($id) {
        $item = Partner::findOrFail($id);
        $old_name = $item->name;
        if ($item->photo) File::delete($item->photo);
        try {
            $item->delete();
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->type = 'delete';
            $activity->text = ' همکاران ما : ' . '(' . $old_name . ')' . ' را حذف کرد';
            $item->activity()->save($activity);
            return redirect()->back()->with(['status' => 'success', "message" => ' با موفقیت حذف شد.']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'یک خطا رخ داده است، لطفا بررسی بفرمایید.']);
        }
    }

}
