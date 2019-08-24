<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;

class UserController extends Controller
{
    public function send(Request $request){
        // dd($request->all());
    	$Demo= new Demo();
    	$Demo->name=$request->name;
    	$Demo->email=$request->email;
    	$Demo->mobile_no=$request->mobile_no;
    	$Demo->password=$request->password;
        
        $Demo->city=$request->city;

        $hobbies = implode(',', $request->hobbies);
        // dd($request->hobbies);
        $Demo->hobbies=$hobbies;
        $Demo->gender=$request->gender;
        $Demo->address=$request->address;
    	$Demo->save();
        return redirect('/read_user');
    }
    public function read(Request $request){
    	$data=Demo::all();
    	return view('read', compact('data'));
    }
    public  function delete(Request $request, $id){
        $data=Demo::where('id',$id)->first();
        $data->delete();
        return redirect('/read_user');
    }
    public function edit(Request $request,$id){
        $data=Demo::where('id',$id)->first();
        // dd($data->hobbies);
        $hobbies = explode(',', $data->hobbies);
        // dd($hobbies);
        return view('edit' ,compact('data', 'hobbies'));
    }
    public function update(Request $request,$id){
        $Demo=Demo::where('id',$id)->first();
        $Demo->name=$request->name;
        $Demo->email=$request->email;
        $Demo->mobile_no=$request->mobile_no;
        $Demo->password=$request->password;
        $Demo->save();
        return redirect('/read_user');
    }
}
