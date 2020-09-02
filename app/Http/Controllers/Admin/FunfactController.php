<?php

namespace App\Http\Controllers\Admin;

use App\Funfact;
use App\Http\Controllers\Controller;
use FunfactSeeder;
use Illuminate\Http\Request;

class FunfactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funFacts = Funfact::all();
        return view('backend.pages.about.fun-fact.index', compact('funFacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about.fun-fact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Funfact();
        $store->icon_class = $request->icon_class;
        $store->fun_fact = $request->fun_fact;
        $store->save();
        toastr()->success('Fun Fact Added Successfully!');
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
        $funFactEdit = Funfact::find($id);
        return view('backend.pages.about.fun-fact.edit', compact('funFactEdit'));
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
        $update = Funfact::find($id);
        $update->icon_class = $request->icon_class;
        $update->fun_fact = $request->fun_fact;
        $update->save();
        toastr()->success('Fun Fact Updated Successfully!');
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
        $funFactDelete = Funfact::find($id);
        $funFactDelete->delete();
        toastr()->success('Fun Fact Updated Successfully!');
        return redirect()->back();
        
    }
}
