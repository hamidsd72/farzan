<?php

namespace App\Http\Controllers\User;

use App\Contact;
use App\Models\ContactInfo;
use App\Models\EmploymentPage;
use App\Attachment;
use App\Employment;
use App\Setting;
use App\ContactCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    // Show Function
    public function show()
    {
        $item = ContactInfo::find(1);
        return view('user.contact.show',compact('item'), ['title' => __('text.page_name.contact')]);
    }

    // Store Function
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'text' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                "err_message" => __('text.err_field')
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'text' => $request->text,
                'lang' => app()->getLocale(),
            ]);
            return redirect()->back()->with(["flash_message" => __('text.flash_msg')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(["err_message" =>  __('text.err_msg')]);
        }
    }

    //Empeloyment
    // Show Function
    public function employment_show()
    {
        $item = Setting::find(1);
        $items = EmploymentPage::orderBy('id','ASC')->where('status_link','active');
        if(app()->getLocale()=='en')
        {
            $items=$items->where('status_en','active');
        }
        $items=$items->get();
        return view('user.employment.show',compact('item','items'), ['title' => __('text.page_name.employment')]);
    }
    // Show1 Function
    public function employment_show1($id)
    {
        $item = EmploymentPage::find($id);
        return view('user.employment.show1',compact('item'), ['title' => set_lang($item,'title',app()->getLocale())]);
    }
    // Store Function
    public function employment_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'age' => 'required',
            'education' => 'required',
            'unit' => 'required',
            'education_type' => 'required',
            'file' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with([
                "err_message" => __('text.err_field')
            ])->withErrors($validator)->withInput();
        }
        try {
            $item = Employment::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'age' => $request->age,
                'unit' => $request->unit,
                'education' => $request->education,
                'education_type' => $request->education_type,
                'lang' => app()->getLocale(),
            ]);
            $masge="درخواست استخدام جدید با اطلاعات زیر در سایت ثبت شده است.\n";
            $masge.="نام : ".$request->name."\n";
            $masge.="ایمیل : ".$request->email."\n";
            $masge.="موبایل : ".$request->mobile."\n";
            $masge.="سن : ".$request->age."\n";
            $masge.="واحد : ".$request->unit."\n";
            $masge.="تحصیلات : ".$request->education."\n";
            $masge.="رشته تحصیلی : ".$request->education_type."\n";
            mail("hr@avindarou.ir", "درخواست استخدام جدید", $masge);

            if ($request->hasFile('file')) {
                $item->file = file_store($request->file, 'includes/asset/uploads/employment/file/'.$item->id.'/', 'file-');;
                $item->save();
            }
            return redirect()->back()->with(["flash_message" => __('text.flash_msg')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(["err_message" =>  __('text.err_msg')]);
        }
    }
}
