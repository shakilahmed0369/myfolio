<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;
use File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.pages.about.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         //validating text and ling filds
         $validateData = $request->validate([    
            'name' => 'required',  
            'title' => 'required',
            'quote' => 'required',
            'testi_image' => 'required|image',
        ]);
         //checking image is set or not and validating image fild
       

        
        if($request->hasFile('testi_image')){
            //file name to save
            $fileName = 'testimonial'.rand(0,1000).'.jpg';
            $fileNameToStore = $fileName;
            //File save location
            $path = $request->file('testi_image')->storeAs('public/images/testimonial/', $fileNameToStore);
        }

        $store = new Testimonial();
        $store->image = $fileNameToStore;
        $store->name = $request->name;
        $store->title = $request->title;
        $store->quote = $request->quote;
        $store->save();
        toastr()->success('Testimonial added Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Testimonial::find($id);
        return view('backend.pages.about.testimonial.edit', compact('edit'));
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
            'name' => 'required',  
            'title' => 'required',
            'quote' => 'required',
        ]);
         //checking image is set or not and validating image fild
       

        $store = Testimonial::find($id);
        if($request->hasFile('testi_image')){
            // delete old image
            File::delete(public_path('storage/images/testimonial/'.$store->image));
            //file name to save
            $fileName = 'testimonial'.rand(0,1000).'.jpg';
            $fileNameToStore = $fileName;
            //File save locaton
            $path = $request->file('testi_image')->storeAs('public/images/testimonial/', $fileNameToStore);
        }

        
        if($request->hasFile('testi_image')){
            $store->image = $fileNameToStore;
        }
        $store->name = $request->name;
        $store->title = $request->title;
        $store->quote = $request->quote;
        $store->save();
        toastr()->success('Testimonial Updated Successfully!');
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
        $delete = Testimonial::find($id);
        $delete->delete();
        // delete old image
        File::delete(public_path('storage/images/testimonial/'.$delete->image));
        toastr()->success('Testimonial Deleted Successfully!');
        return redirect()->back();
    }
}
