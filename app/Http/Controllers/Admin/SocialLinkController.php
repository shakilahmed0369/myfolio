<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Social_link;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $links = Social_link::all();
       return view('backend.pages.social_links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.social_links.create');
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
            'icon_class' => 'required',
            'name' => 'required',
            'link' => 'required|url'
        ]);
        
        //saving data on database
        $sociallink = new Social_link();
        $sociallink->icon_class = $request->icon_class;
        $sociallink->name = $request->name;
        $sociallink->link = $request->link;
        $sociallink->save();
        toastr()->success('Social link successfully added!');
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
        $edit = Social_link::find($id);
        return view('backend.pages.social_links.edit', compact('edit'));
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
            'icon_class' => 'required',
            'name' => 'required',
            'link' => 'required|url'
        ]);
        
        //saving data on database
        $sociallink = Social_link::find($id);
        $sociallink->icon_class = $request->icon_class;
        $sociallink->name = $request->name;
        $sociallink->link = $request->link;
        $sociallink->save();
        toastr()->success('Social link updated successfully!');
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
        $link = Social_link::find($id);
        $link->delete();
        toastr()->success('Social link Deleted successfully!');
        return redirect()->back();
    }
}
