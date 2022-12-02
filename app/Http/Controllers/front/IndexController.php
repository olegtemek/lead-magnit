<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Question;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['setting'] = Setting::find(1);
        $data['portfolio'] = Portfolio::all();
        $data['questions'] = Question::all();
        return view('front.layouts.main', compact('data'));
    }
}
