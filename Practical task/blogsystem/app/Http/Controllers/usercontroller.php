<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\user;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('register');
    }
    public function login ()
    {
        return view('login');
    }
    
    public function loginauth(Request $request){
        $unm=$request->unm;
        $data=user::where('unm','=',$unm)->first();
        if($data){
            if(Hash::check($request->pass,$data->pass)){
                if($data->status=="Unblock"){
                Session()->put('userid',$data->id);
                Session()->put('unm',$data->unm);
                Session()->put('name',$data->name);
                 return redirect('/index');
                }
                else{
                    return redirect('/login')->with('fail','Login Failed Due To Blocked Account');
                }
            }else{
                return redirect('/login')->with('fail','password not valid');
            }
        }else{
            return redirect('/login')->with('fail','username not valid');
        }
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
        $data=new user();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->unm=$request->unm;

        $data->pass=Hash::make($request->pass);
        $data->gen=$request->gen;
        $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/user/',$filename);
        $file=$data->file=$filename;
        $data->save();
        return redirect('/register');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        $data=user::all();
        return view('display1',['data'=>$data]);
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
    public function destroy(user $user,$id)
    {

    }
    public function status(user $user,$id){
        $data=user::find($id);
        if($data->status=="Unblock"){
            $data->status="Block";
            $data->save();
            return redirect('/display1');
        }
        elseif($data->status=="Block"){
            Auth::logout();
            session()->flush();

            $data->status="Unblock";
            $data->save();
            return redirect('/display1');
        }
    }
    public function logout(){
        Session()->pull('user_id');
        Session()->pull('name');
        Session()->pull('unm');
    }
}
