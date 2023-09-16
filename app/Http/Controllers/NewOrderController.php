<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\archive;
use App\Models\HomeVideo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NewOrderController extends Controller
{
    public function newOrderView(){
        $data['prev'] = archive::all();
        $data['count'] = count($data['prev']);
        return view("website.new_order", $data);
    }

    public function saveOrder(Request $request){
        $ids = archive::all()->pluck("id");
        $myarray = $request->myarray;
        foreach($ids as $key => $item){
            archive::where("id", $item)->update([
                "arch_order" => $myarray[$key+1],
            ]);
            // if($myarray[$key] == null){
            //     echo "null"."<br>";
            // }
            // echo "<br>".$myarray[$key];
        }
        $data = archive::orderBy("arch_order", "asc")->get();
        // return  $data->id;
        return redirect()->back();
    }
    
    // for home videos
    public function homeOrderView(){
        $data['prev'] = HomeVideo::all();
        $data['count'] = count($data['prev']);
        // return $data['prev'];
        return view("website.home_order", $data);
    }

    public function homeSaveOrder(Request $request){
        // return $request;
        $ids = HomeVideo::all()->pluck("id");
        $myarray = $request->myarray;
        foreach($ids as $key => $item){
            HomeVideo::where("id", $item)->update([
                "arch_order" => $myarray[$key+1],
            ]);
            
        }
        $data = archive::orderBy("arch_order", "asc")->get();
        
        return redirect()->back();
    }
    
    // users
    public function allUsers(Request $request){
        $data["allUsers"] = User::all();
        return view("allUsers", $data);
    }

    public function deleteUser(Request $request){
        User::where("id", $request->id)->delete();
        return redirect()->back();
    }

    public function resgisterUser(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            "user_role" => "client",
        ]);
        return redirect()->back();
    }

    public function editUser(Request $request){
        $data['users'] = User::find($request->id);

        return view("editUserView", $data);
    }

    public function updateUser(Request $request){
        if($request->password == null){
            User::where("id", $request->id)->update([
                "name" => $request->name,
                "email" => $request->email,
                "user_role" => $request->user_role,
            ]);
        } else{
            User::where("id", $request->id)->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "user_role" => $request->user_role,
            ]);
        }
        return redirect()->back();
    }
}
