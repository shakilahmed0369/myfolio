<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $about = About::find($userId);
        return view('backend.pages.about.about-me.index', compact('about'));
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
         //validating text and ling filds
         $validateData = $request->validate([
            'about'       => 'required',
            'age'         => 'required',
            'residence'   => 'required',
            'freelance'   => 'required',
            'address'     => 'required',
        ]);

        $update = About::find($id);
        $update->about = $request->about;
        $update->age = $request->age;
        $update->residence = $request->residence;
        $update->freelance = $request->freelance;
        $update->address = $request->address;
        $update->save();
        toastr()->success('About Info Update Successfully!');
        return redirect()->back();

    }


}
