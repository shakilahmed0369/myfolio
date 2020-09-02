<?php

namespace App\Http\Controllers\Admin;

use App\Blog_cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $BlogCats = Blog_cat::all();
        return view('backend.pages.blog.blog_cat.index', compact('BlogCats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blog.blog_cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //validation
          $validateData = $request->validate([
            'cat_name' => 'required',
        ]);

        $store = new Blog_cat();
        $store->name = $request->cat_name;
        $store->save();
        toastr()->success('Category Added Successfully!');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catEdit = Blog_cat::find($id);
        return view('backend.pages.blog.blog_cat.edit', compact('catEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $validateData = $request->validate([
            'cat_name' => 'required',
        ]);

        $store = Blog_cat::find($id);
        $store->name = $request->cat_name;
        $store->save();
        toastr()->success('Category Updated Successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Blog_cat::find($id);
        $destroy->delete();
        toastr()->success('Category Deleted Successfully!');
        return redirect()->back();
    }
}
