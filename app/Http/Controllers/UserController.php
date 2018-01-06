<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use Auth;

use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function profile(){
        return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request) {
 
        // Logic for user upload of avatar
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
 
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        
        return view('profile', array('user' => Auth::user()))->with('info','Image Updated Successfully');
 
    }

    public function profile_update(Request $request, $id) {
        $this->validate($request, [
            'dob' => 'required',
            'gender' => 'required',
            'mobile' => 'required'
        ]);

        $user = User::whereId($id)->firstOrFail();

        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->mobile = $request->input('mobile');
        $user->save();
        return view('profile', array('user' => Auth::user()))->with('info','Profile Sucessfully Updated');
    }
}
