<?php

namespace App\Http\Controllers;

use App\Models\user;
use Hash;
use Mail;
use App\Mail\welcomemail;
use Illuminate\Http\Request;

class usercontoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'unm' => 'required|unique:users|max:255',
            'name' => 'required',
            'pass' => 'required|min:3|max:12',
            'gen'=>'required|in:male,female',
            'address'=>'required',
            'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email'=>'sometimes|required|email',
           

        ]);
        //  echo"<pre>";
        //  print_r($request->all());
        //  exit;
        $data=new user();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->unm=$request->unm;
        $data->pass=hash::make($request->pass);
        $data->gen=$request->gen;
        $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/user/',$filename);
        $file=$data->file = $filename;

        $data->save();
        $name =$request->name;
        $email =$request->email; 
              
        $data=array("name"=>$name,"email"=>$email);
        Mail::to($email)->send(new welcomemail($data));
        return redirect('/index')->with('sucess','register sucess');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
