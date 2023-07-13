<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogcontroller extends Controller
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
        $data=new blog();
        $data->name=$request->name;
        $data->description=$request->description;
        $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/customer/',$filename);
        $file=$data->file=$filename; 
        $data->user_id=session()->get('userid');       
        $data->save();
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        $data=blog::all();
        return view('/display',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog,$id)
    {
        $data=blog::find($id);
        return view('/editprofile',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog,$id)
    {
        $data=blog::find($id);
        $data->name=$request->name;
        $data->description=$request->description;
        if($request->hasfile('file')){
            $old_img=$data->file;
            // unlink('upload/customer/'.$old_img);
            

            $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/customer/',$filename);
        $data->file=$filename;  
            $data->save();
        }
        return redirect('/display');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog,$id)
    {
        $data=blog::find($id);
        $delfile=$data->file;
        $data->delete();
        unlink('upload/customer/'.$delfile);
        return redirect('/display');

    }
}
