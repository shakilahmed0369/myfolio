<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.pages.account.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validateData = $request->validate([
           'email' => 'required',
        ]);

        $user->email = $request->email;

        if($request->password == $request->con_password){
            $user->password = Hash::make($request->password);
            $user->save();
            toastr()->success('Account Update Successfully!');
            return redirect()->back();
        }else{
            toastr()->warning('Password does not match');
            return redirect()->back();
        }
        $user->save();
        toastr()->success('Account Update Successfully!');
        return redirect()->back();


    }
}
