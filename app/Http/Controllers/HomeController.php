<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Template;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $categories = Category::all();
        $templates = Template::orderBy('id','desc')->paginate(20);
        return view('home', compact('templates', 'categories'));
    }
}
