<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uesrId = Auth::id();
        $user = User::find($uesrId);
        return view('backend.pages.profile.index', compact('user'));
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
        //user object
        $user = User::find($id);
        
        //validating text and ling filds
        $validateData = $request->validate([
            'name'          => 'required|max:20',
            'title'         => 'required|max:50',
            'cv_link'       => 'required|url',
        ]);
        //checking image is set or not and validating image fild
        if($request->file('cover_image') != ''){
            $validateData = $request->validate([
                'cover_image' => 'mimes:jpeg,jpg,png,gif',
            ]); 
        }
        //checking image is set or not and validating image fild
        if($request->file('image') != ''){
            $validateData = $request->validate([
                'image' => 'image',
            ]); 
        }
        
        // handle image file
        if($request->hasFile('image')){
            //  delete image from public
            File::delete(public_path('storage/images/profile/'.$user->image));
            //file name to save
            $fileName = 'avatar'.rand(0,1000).'.jpg';
            $fileNameToStore = $fileName;
            //File save location
            $path = $request->file('image')->storeAs('public/images/profile', $fileNameToStore);
        }

        if($request->hasFile('cover_image')){
            //  delete image from public
             File::delete(public_path('storage/images/cover/'.$user->cover_image));
             
             //file name to save
             $fileName = 'cover'.rand(0,1000).'.jpg';
             $fileNameToStore_c = $fileName;
             //File save location
             $path = $request->file('cover_image')->storeAs('public/images/cover', $fileNameToStore_c);
        }

        // updating in database
        $user->name = $request->name;
        $user->title = $request->title;
        if($request->hasFile('image')){
            $user->image = $fileNameToStore;
        }
        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStore_c;
        }
        $user->cv_link = $request->cv_link;
        $user->save();
        toastr()->success('Profile Update Successfully!');
        return redirect()->back();
    }


}
