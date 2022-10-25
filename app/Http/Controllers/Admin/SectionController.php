<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lang;
use App\Models\Section;
use App\Activity; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SectionController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'بخش ها';
        } elseif ('single') {
            return 'بخش';
        }
    }

    public function controller_paginate()
    {
        $settings = Setting::select('paginate')->latest()->firstOrFail();
        return $settings->paginate;
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items  = Section::all()->sortByDesc('id');
        return view('admin.section.index', compact('items'), ['title1' => $this->controller_title('single'), 'title' => $this->controller_title('sum')]);
    }

    public function create()
    {
        return view('admin.section.create', ['title1' => $this->controller_title('single'), 'title' => $this->controller_title('sum')]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type'          => 'required',
            'title'         => 'required',
            'shor_text'     => 'required',
            'description'   => 'required',
            'status'        => 'required',
            'sort'          => 'required',
            'pic'           => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }

        $item = new Section();
        $item->type         = $request->type;
        $item->title        = $request->title;
        $item->shor_text    = $request->shor_text;
        $item->description  = $request->description;
        $item->status       = $request->status;
        $item->sort         = $request->sort;

        if ($request->hasFile('pic')) {
            $item->pic = file_store($request->pic, 'includes/asset/uploads/section/photos/', 'photo-');;
        }
        $item->save();

        return redirect()->route('section.index');
    }

    public function edit($id)
    {
        $item = Section::find($id);
        return view('admin.section.edit', compact('item'), ['title1' => $this->controller_title('single'), 'title' => $this->controller_title('sum')]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'type'          => 'required',
            'title'         => 'required',
            'shor_text'     => 'required',
            'description'   => 'required',
            'status'        => 'required',
            'sort'          => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }


        $item = Section::findOrFail($id);
        if ($request->hasFile('pic')) {
            $item->pic = file_store($request->pic, 'includes/asset/uploads/section/photos/', 'photo-');;
        }
        $item->type         = $request->type;
        $item->title        = $request->title;
        $item->shor_text    = $request->shor_text;
        $item->description  = $request->description;
        $item->status       = $request->status;
        $item->sort         = $request->sort;
        $item->save();
        
        return redirect()->route('section.index');
    }

    public function destroy($id)
    {
        Section::find($id)->delete();
        return redirect()->route('section.index');
    }
}
