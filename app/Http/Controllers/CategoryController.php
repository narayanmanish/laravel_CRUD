<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories= Category::all();
        return view('category.test',['categories' => $categories]);
    }

    public function create()
    {
        return view('category.new');
    }
    public function store(Request $req)
    {
        $category = new Category();
        $category->title=$req->title;
        $category->save();
        return redirect('/');
    }
    public function edit($id)
    {
        $category=Category::where('id',$id)->first();
       return view('category.edit',['category' => $category]);
    }
    public function update(Request $requ,$id)
    {
        $category=Category::where('id',$id)->first();
        $category->title=$requ->title;
        $category->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        $category=Category::where('id',$id)->first();
        $category->delete();
        return redirect('/');
    }
}

