<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lang;
use App\Models\Link;
use App\Activity; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class LinkController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'لینک ها';
        } elseif ('single') {
            return 'لینک';
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
        $items = Link::all()->sortByDesc('id');
        return view('admin.links.index', compact('items'), ['title1' => $this->controller_title('single'), 'title' => $this->controller_title('sum')]);
    }

    public function create()
    {
        $items = Link::all()->sortByDesc('id');
        return view('admin.links.create', compact('items'), ['title1' => $this->controller_title('single'), 'title' => $this->controller_title('sum')]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sort'      => 'required',
            'title'     => 'required',
            'url'       => 'required',
            'en_title'  => 'required',
            'status'    => 'required',
            'position'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        Link::create($request->all());
        return redirect()->route('link.index');
    }

    public function edit($id)
    {
        $items = Link::all()->sortByDesc('id');
        $item = Link::find($id);
        return view('admin.links.edit', compact('item','items'), ['title1' => $this->controller_title('single'), 'title' => $this->controller_title('sum')]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'sort'      => 'required',
            'title'     => 'required',
            'url'       => 'required',
            'en_title'  => 'required',
            'status'    => 'required',
            'position'  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                'status' => 'danger-600',
                "message" => 'لطفا فیلد ها را بررسی نمایید، فیلد ها نمی توانند خالی باشند.'
            ])->withErrors($validator)->withInput();
        }
        $item = Link::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('link.index');
    }

    public function destroy($id)
    {
        dd('www');
        Link::find($id)->delete();
        return redirect()->route('link.index');
    }
}
