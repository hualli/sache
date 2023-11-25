<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('name','ASC')->get();

        return view('categories.index', compact('categories'));
    }

    public function show(){

    }

    public function edit(){
        
    }
}
