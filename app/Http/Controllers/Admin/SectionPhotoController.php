<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lang;
use App\Models\Section;
use App\Photo;
use App\Activity; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SectionPhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $photo = new Photo();
            $photo->pictures_id     = $request->item_id;
            $photo->pictures_type   = 'App\Models\Section';
            $photo->path = file_store($request->image, 'includes/asset/uploads/section/photos/', 'photo-');;
            $photo->save();
        }
        return back();
    }

    public function destroy($id)
    {
        Photo::find($id)->delete();
        return back();
    }
}
