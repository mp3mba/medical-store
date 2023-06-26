<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $category = new Category;

        $request->validate([
            'category_name'
        ]);

        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->back()->with('message', 'Category Added Successful');
    }
}
