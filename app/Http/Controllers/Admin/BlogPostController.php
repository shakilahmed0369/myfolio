<?php

namespace App\Http\Controllers\Admin;

use App\Blog_cat;
use App\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = BlogPost::all();
       return view('backend.pages.blog.index', compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCats = Blog_cat::all();
        return view('backend.pages.blog.create', compact('blogCats'));
        
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
            'post_image'        => 'required|image',
            'title'             => 'required',
            'description'       => 'required',
            'blog_cat_id'       => 'required'
        ]);
        
            //handle file
          if($request->hasFile('post_image')){
            $image = $request->file('post_image');
            //original image name
            $fileNameWithExt = $image->getClientOriginalName();
            //get only name 
            $fileOnlyName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get the extension
            $fileExt = $request->file('post_image')->getClientOriginalExtension();
            //file name
            $filename = $fileOnlyName.'-'.time().'.'.$fileExt;
            //saving the original image on work_image dir
            $image_resize = Image::make($image->getRealPath());
            //resizing image for thumbnail and saving to thumbnail dir
            $image_resize->fit( 800,375);
            $image_resize->save(public_path('storage/images/blog/'.$filename), 80, 'jpg');
            
        }

        $store = new BlogPost();
        $store->post_image  = $filename;
        $store->title  = $request->title;
        $store->blog_cat_id = $request->blog_cat_id;
        $store->description = $request->description;
        $store->save();
        toastr()->success('Post Added Successfully!');
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
        $blogCats = Blog_cat::all();
        $editBlog = BlogPost::find($id);
        return view('backend.pages.blog.edit', compact('editBlog', 'blogCats'));
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
        $updatePost = BlogPost::find($id);
        $validateData = $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'blog_cat_id'       => 'required'
        ]);
        
            //handle file
          if($request->hasFile('post_image')){

            $validateData = $request->validate([
                'post_image'        => 'image',
            ]);

            File::delete(public_path('storage/images/blog/'. $updatePost->post_image));

            $image = $request->file('post_image');
            //original image name
            $fileNameWithExt = $image->getClientOriginalName();
            //get only name 
            $fileOnlyName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get the extension
            $fileExt = $request->file('post_image')->getClientOriginalExtension();
            //file name
            $filename = $fileOnlyName.'-'.time().'.'.$fileExt;
            //saving the original image on work_image dir
            $image_resize = Image::make($image->getRealPath());
            //resizing image for thumbnail and saving to thumbnail dir
            $image_resize->fit( 800,375);
            $image_resize->save(public_path('storage/images/blog/'.$filename), 80, 'jpg');
            
        }
        if($request->hasFile('post_image')){
            $updatePost->post_image  = $filename;
        }
        $updatePost->title  = $request->title;
        $updatePost->blog_cat_id = $request->blog_cat_id;
        $updatePost->description = $request->description;
        $updatePost->save();
        toastr()->success('Post Updated Successfully!');
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
        $deletePost = BlogPost::find($id);
        $deletePost->delete();
        File::delete(public_path('storage/images/blog/'.$deletePost->post_image));
        toastr()->success('Post Delete Successfully!');
        return redirect()->back();
    }
}
