<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('backend.pages.about.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about.clients.create');
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
            'client_logo' => 'required|image',      
        ]);
        
        if($request->hasFile('client_logo')){
            //file name to save
            $fileName = 'client_logo'.rand(0,1000).'.jpg';
            $fileNameToStore = $fileName;
            //File save location
            $path = $request->file('client_logo')->storeAs('public/images/client_logo/', $fileNameToStore);
        }

        $store = new Client();
        $store->client_logo = $fileNameToStore;
        $store->save();
        toastr()->success('Client Added Successfully!');
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
        $edit = Client::find($id);
        return view('backend.pages.about.clients.edit', compact('edit'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        Storage::delete(asset('storage/images/client_logo/'.$client->client_logo));
        $client->delete();
        toastr()->success('Post DELETED successfully!');
        return redirect()->back();
    }
}
