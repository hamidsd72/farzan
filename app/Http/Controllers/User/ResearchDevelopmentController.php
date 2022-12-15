<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ResearchDevelopmentController extends Controller {

    public function index() {
        return view('user.research_development.index', ['title' => __('text.page_name.research_development')]);
    }

}
