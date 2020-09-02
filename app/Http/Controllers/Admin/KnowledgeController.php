<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledges = Knowledge::all();
        return view('backend.pages.my-skill.knowledge.index', compact('knowledges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.my-skill.knowledge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $validateData = $request->validate([
            'title' => 'required'
        ]);

        $store = new Knowledge();
        $store->title = $request->title;
        $store->save();

        toastr()->success('Knowledge Added Successfully!');
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
        $knowledge = Knowledge::find($id);
        return view('backend.pages.my-skill.knowledge.edit', compact('knowledge'));
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
            'title' => 'required'
        ]);

        $update = Knowledge::find($id);
        $update->title = $request->title;
        $update->save();
        toastr()->success('Knowledge Update Successfully!');
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
        $destroy = Knowledge::find($id);
        $destroy->delete();
        toastr()->success('Knowledge Delete Successfully!');
        return redirect()->back();
    }
}
