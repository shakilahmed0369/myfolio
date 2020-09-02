<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Work_cat;
use Illuminate\Http\Request;

class WorkCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workCats = Work_cat::all();
        return view('backend.pages.works.work_cat.index', compact('workCats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.works.work_cat.create');
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
            'name' => 'required',
        ]);

        $store = new Work_cat();
        $store->name = $request->name;
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
        $edit = Work_cat::find($id);
        return view('backend.pages.works.work_cat.edit', compact('edit'));
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
                    'name' => 'required',
                ]);
        
                $store = Work_cat::find($id);
                $store->name = $request->name;
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
        $destroy = Work_cat::find($id);
        $destroy->delete();
        toastr()->success('Category Deleted Successfully!');
        return redirect()->back();
    }
}
