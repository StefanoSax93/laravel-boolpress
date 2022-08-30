<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return view("admin.users.index", compact("users"));
    }

    public function edit($id) {
        
        $user = User::findOrFail($id);

        return view("admin.users.edit", compact('user'));
    }

    public function update(Request $request, $id) {

        $data = $request->validate([
            "province"=>"size:2",
            "city"=>"min:3",
            "address"=>"min:10",
            "phone"=>"numeric",
            "profile_img" => "nullable|image"    
        ]);
            $user = User::findOrFail($id);

            if (key_exists("profile_img", $data)) {
                
                if ($user->profile_img) {
                    Storage::delete($user->profile_img);
                }
    
                $profileImg = Storage::put("/users_profile_img", $data["profile_img"]);
                
                $user->profile_img = $profileImg;
            }
            if(!$user->details) {

                $user->details = New UserDetail();
                $user->details->user_id = $user->id;
                $user->details->fill($data);
                $user->details->save();

            } else {
                $user->details->update($data);
            }

            $user->update($data);

            return redirect()->route('admin.users.index');
    }
}
