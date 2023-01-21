<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Photo;
use App\User;
use App\Menu;
use App\Certificate;
use App\Models\Farzan\Slider;
use App\ProductCategory;
use App\Models\ProductCat;
use App\About;
use App\Models\AboutFeature;
use App\Models\Lang;
use App\Product;
use App\Setting;
use App\Models\Blog;
use App\Models\Partner;
use App\Sms;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\jdf;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;
use Nestable\Tests\Model\Category;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;
use Session;

class HomeController extends Controller
{
    public function custom_login(Request $request) {
        $error = "نام کاربری یافت نشد";
        $user = User::where('name', $request->name)->first();
        if ($user) {
            if ( password_verify( $request->password,$user->password) ) {
                Auth::loginUsingId($user->id);
                return redirect()->route('admin-home');
            }
            $error = "رمز عبور اشتباه است";
        }
        return redirect()->back()->with(['status' => 'danger-600', "message" => $error]);        
    }

    public function index()
    {
        // dd(password_verify('passwor',User::first()->password));

        $sliders=Slider::with('photo')->orderBy('id','desc')->get();
//        $product_cat_homes=ProductCategory::where('status_home','active')->orderBy('id','desc')->take(4)->get();
        $menu_slider_downs=Menu::where('slider_down','active')->orderBy('sort_id','ASC')->take(4)->get();
        $about=About::find(1);
        $products=Product::where('site','active')->where('status_home','active')->orderBy('id','desc')->take(6)->get();
        $setting=Setting::find(1);
        $abouts_f=AboutFeature::where('status','active')->where('status_home','active')->orderBy('id','ASC')->take(3)->get();
        $certs=Certificate::where('status_home','active')->orderBy('id','DESC')->get();
        $partners=Partner::orderBy('id','DESC')->get();
        $blogs=Blog::where('status','active')->where('status_home','active')->orderBy('id','desc')->take(4)->get();

        $sections = Section::where('status', 'active')->get();
        return view('user.index', compact('sections','sliders','menu_slider_downs','about','products','setting','abouts_f','certs','partners','blogs') );
    }
    public function index1()
    {
        // dd(password_verify('passwor',User::first()->password));

        $sliders=Slider::where('show',1)->orderBy('sort_id','asc')->get();
//        $product_cat_homes=ProductCategory::where('status_home','active')->orderBy('id','desc')->take(4)->get();
        $menu_slider_downs=Menu::where('slider_down','active')->orderBy('sort_id','ASC')->take(4)->get();
        $about=About::find(1);
        $products=Product::where('site','active')->where('status_home','active')->orderBy('id','desc')->take(6)->get();
        $setting=Setting::find(1);
        $abouts_f=AboutFeature::where('status','active')->where('status_home','active')->orderBy('id','ASC')->take(3)->get();
        $certs=Certificate::where('status_home','active')->orderBy('id','DESC')->get();
        $partners=Partner::orderBy('id','DESC')->get();
        $blogs=Blog::where('status','active')->where('status_home','active')->orderBy('id','desc')->take(4)->get();

        $sections = Section::where('status', 'active')->get();
        return view('user.index1', compact('sections','sliders','menu_slider_downs','about','products','setting','abouts_f','certs','partners','blogs') );
    }



    //search
    public function search(Request $request)
    {
        if(app()->getLocale()=='fa')
        {
            $products=Product::where('site','active')->where('name','LIKE','%'.$request->search.'%')->orwhere('text','LIKE','%'.$request->search.'%')->orderBy('id','desc')->get();
            $blogs=Blog::where('status','active')->where('title','LIKE','%'.$request->search.'%')->orwhere('text','LIKE','%'.$request->search.'%')->orderBy('id','desc')->get();
        }
        else
        {
            $lang_products=Lang::where('type','product')->where('text_en','LIKE','%'.$request->search.'%')->select('item_id')->get()->toArray();
            $products=Product::where('site','active')->wherein('id',$lang_products)->get();
            $lang_blogs=Lang::where('type','blog')->where('text_en','LIKE','%'.$request->search.'%')->select('item_id')->get()->toArray();
            $blogs=Blog::where('status','active')->wherein('id',$lang_blogs)->get();
        }
        return view('user.search.show',compact('products','blogs'), ['title' => __('text.page_name.search')]);
    }

    //page
    public function page_show($slug)
    {
        if(app()->getLocale()=='fa')
        {
            $item=Menu::where('slug',$slug)->first();
        }
        else
        {
            $item=Menu::where('slug_en',$slug)->first();
        }
        if(!$item)
        {
            return redirect()->route('user.index');
        }
        return view('user.page.show',compact('item'), ['title' => set_lang($item,'name',app()->getLocale())]);
    }
    // reset pass
    public function reset(Request $request)
    {
        $user = User::where('mobile', $request->mobile)->first();

        return redirect()->back()->with(['status' => 'danger-600', "message" => 'سامانه پیامکی فعال نمی باشد']);

//        if (is_null($user)) {
//            return redirect()->back()->with(['status' => 'danger-600', "message" => 'شماره همراه اشتباه می باشد']);
//        }
//
//        if ($user->branch_id != 0) {
//            return redirect()->back()->with(['status' => 'danger-600', "message" => '&#1588;&#1593;&#1576;&#1607; &#1583;&#1575;&#1585; &#1605;&#1581;&#1578;&#1585;&#1605; &#1588;&#1605;&#1575; &#1605;&#1580;&#1575;&#1586; &#1576;&#1607; &#1578;&#1594;&#1740;&#1740;&#1585; &#1585;&#1605;&#1586; &#1593;&#1576;&#1608;&#1585; &#1582;&#1608;&#1583; &#1606;&#1605;&#1740; &#1576;&#1575;&#1588;&#1740;&#1583; &#1604;&#1591;&#1601;&#1575; &#1576;&#1575; &#1662;&#1588;&#1578;&#1740;&#1576;&#1575;&#1606;&#1740; &#1578;&#1605;&#1575;&#1587; &#1581;&#1575;&#1589;&#1604; &#1601;&#1585;&#1605;&#1575;&#1740;&#1740;&#1583;']);
//
//        }


//        try {
//            $pass = mt_rand(1111111, 9999999);
//            $user->password = Hash::make($pass);
//            $user->update();
//
//
//            Sms::sendPass($pass, $user->mobile);
//
//            return redirect()->back()->with(['status' => 'success', "message" => 'رمز عبور با موفقیت ارسال شد']);
//        } catch (Exception $e) {
//            return redirect()->back()->with(['status' => 'danger-600', "message" => '&#1740;&#1705; &#1582;&#1591;&#1575; &#1585;&#1582; &#1583;&#1575;&#1583; &#1604;&#1591;&#1601;&#1575; &#1576;&#1585;&#1585;&#1587;&#1740; &#1705;&#1606;&#1740;&#1583;']);
//
//        }

    }

    public function projects(){
        $setting=Setting::find(1);

        $sliders=Slider::with('photo')->orderBy('created_at','asc')->get();
        $titleSeo = "شرکت فرزان";
        return view('user.projects.index-old',compact('sliders','titleSeo','setting'));
    }

    public function service()
    {
        $setting=Setting::find(1);
        $titleSeo = "شرکت فرزان";
        $sliders=Slider::with('photo')->orderBy('created_at','asc')->get();

        return view('user.service.index',compact('titleSeo','setting','sliders'));

    }

    public function product()
    {
        $setting=Setting::find(1);
        $titleSeo = "شرکت فرزان";
//        $sliders=Slider::with('photo')->orderBy('created_at','asc')->get();
        return view('user.product.index',compact('titleSeo','setting'));

    }

    public function partner(){
        $setting=Setting::find(1);
        $titleSeo = "همکاران فرزان";
        $items = Partner::where('status','active')->where('is_title', 'deactive')->orderBy('sort_id')->get();
        $item = Partner::where('is_title', 'active')->first();
        return view('user.partner.index',compact('titleSeo','setting','item','items'));
    }
    public function certificate(){
        $setting=Setting::find(1);
        $titleSeo = "گواهینامه ها";
        return view('user.certificate.show',compact('titleSeo','setting'));
    }

}
