<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Work;
use App\Work_cat;
use File;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $works = Work::find(8);
       
        return view('backend.pages.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $work_cats = Work_cat::all();
        
        return view('backend.pages.works.create', compact('work_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'work_image'  => 'required',
            'title'       => 'required',
            'work_cat_id' => 'required'
        ]);

        //image name collector
        $imageName = [];

        foreach($request->file('work_image') as $image){

        //handle file
          if($request->hasFile('work_image')){

            $image = $image;
            //original image name
            $fileNameWithExt = $image->getClientOriginalName();
            //get only name 
            $fileOnlyName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get the extension
            $fileExt = $image->getClientOriginalExtension();
            //file name
            $filename = str_replace(' ', '', $fileOnlyName.'-'.time().'.'.$fileExt);
            //saving the original image on work_image dir
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('storage/images/works/work_image/'.$filename), 80,'jpg');
            //resizing image for thumbnail and saving to thumbnail dir
            $image_resize->fit(600, 800, null, 'top');
            $image_resize->save(public_path('storage/images/works/thumbnail/'.$filename), 50, 'jpg');
            $imageName[] = $filename; 
        }
        }
          
        //storing all data in database
        $store = new Work();
        $store->work_image = json_encode($imageName);
        $store->title = $request->title;
        $store->link = $request->link;
        $store->work_cat_id = $request->work_cat_id;
        $store->description = $request->description;
        $store->save();
        toastr()->success('Category Updated Successfully!');
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
        $work_cats = Work_cat::all();
        $editWork = Work::find($id);
        return view('backend.pages.works.edit', compact('work_cats', 'editWork'));
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
        $updateWork = Work::find($id);

        $validateData = $request->validate([
            'work_image'  => 'image',
            'title'       => 'required',
            'work_cat_id' => 'required'
        ]);
        
            //handle file
          if($request->hasFile('work_image')){
            //validating image if image isset
            $validateData = $request->validate([
                'work_image'  => 'image',
            ]);
            // removing old image
            File::delete(public_path('storage/images/works/thumbnail/'. $updateWork->work_image));
            File::delete(public_path('storage/images/works/work_image/'. $updateWork->work_image));

            //request file
            $image = $request->file('work_image');
            //original image name
            $fileNameWithExt = $image->getClientOriginalName();
            //get only name 
            $fileOnlyName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get the extension
            $fileExt = $request->file('work_image')->getClientOriginalExtension();
            //file name
            $filename = $fileOnlyName.'-'.time().'.'.$fileExt;
            //saving the original image on work_image dir
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('storage/images/works/work_image/'.$filename), 80,'jpg');
            //resizing image for thumbnail and saving to thumbnail dir
            $image_resize->fit(600, 800, null, 'top');
            $image_resize->save(public_path('storage/images/works/thumbnail/'.$filename), 50, 'jpg');  
        }
        //storing all data in database
        if($request->hasFile('work_image')){
            $updateWork->work_image = $filename;
        }
        $updateWork->title = $request->title;
        $updateWork->link = $request->link;
        $updateWork->work_cat_id = $request->work_cat_id;
        $updateWork->description = $request->description;
        $updateWork->save();
        toastr()->success('Work Updated Successfully!');
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
        $destroyWork = Work::find($id);
        // removing old image
        File::delete(public_path('storage/images/works/thumbnail/'. $destroyWork->work_image));
        File::delete(public_path('storage/images/works/work_image/'. $destroyWork->work_image));
        $destroyWork->delete();
        toastr()->success('Work Deleted Successfully!');
        return redirect()->back();
    }
}
