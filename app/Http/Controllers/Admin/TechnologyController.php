<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techs = Technology::all();
        return view('backend.pages.my-skill.technologies.index', compact('techs'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.my-skill.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validateion
         $validateData = $request->validate([
            'icon_class' => 'required',
            'title' => 'required'
        ]);

        $store = new Technology();
        $store->icon_class = $request->icon_class;
        $store->title = $request->title;
        $store->save();
        toastr()->success('Technology Added Successfully!');
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
        $tech = Technology::find($id);
        return view('backend.pages.my-skill.technologies.edit', compact('tech'));

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
        //validateion
        $validateData = $request->validate([
            'icon_class' => 'required',
            'title' => 'required'
        ]);

        $store = Technology::find($id);
        $store->icon_class = $request->icon_class;
        $store->title = $request->title;
        $store->save();
        toastr()->success('Technology Updated Successfully!');
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
        $distroy = Technology::find($id);
        $distroy->delete();
        toastr()->success('Technology Deleted Successfully!');
        return redirect()->back();
    }
}
