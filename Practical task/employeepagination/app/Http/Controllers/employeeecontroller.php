<?php

namespace App\Http\Controllers;

use App\Models\employeee;
use Illuminate\Http\Request;
use Hash;
use session;

class employeeecontroller extends Controller
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
    public function login()
    {
        return view('login');
    }
    public function welcome(){
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new employeee();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->unm=$request->unm;
        $data->pass=Hash::make($request->pass);
        $data->gen=$request->gen;
        
        $file = $request->file('file');
        $filename = time() . '_img.' . $request->file('file')->getClientOriginalExtension();
        $file->move('upload/customer/', $filename);
        $file=$data->file = $filename;
        $data->save();
        return redirect('/index')->with('sucess','regsiter sucess');
        


    }
    public function  loginauth(Request $request)
    {
        
       
         {
            $request->validate([
                'unm'=>'required',
                'pass'=>'required|min:3|max:7',
            ]);
            $unm=$request->unm;
            $data=employeee::where('unm','=',$unm)->first();
            if($data){
                if(Hash::check($request->pass,$data->pass)){

                    Session()->put('userid',$data->id);
                    Session()->put('unm',$data->unm);
                    Session()->put('name',$data->name);
                    return redirect('/welcome')->with('sucess','login sucess');
                }else{
                    return redirect('/login')->with('fail','login fail');
                }
            }

         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employeee  $employeee
     * @return \Illuminate\Http\Response
     */
    public function show(employeee $employeee)
    {
        $data=employeee::paginate(3);
        // return view('/table',["data"=>$data]);
        return view('employee.table',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employeee  $employeee
     * @return \Illuminate\Http\Response
     */
    public function edit(employeee $employeee,$id)
    {
        $data=employeee::find($id);
        return view('editprofile',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employeee  $employeee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employeee $employeee,$id)
    {
         $data=employeee::find($id);
         $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->unm=$request->unm;
        $data->gen=$request->gen;
        if($request->hasfile('file')){
            $old_img=$data->file;
            unlink('upload/customer/'.$old_img);
            $file=$request->file('file');
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('upload/customer/',$filename);
            $data->file=$filename;
            $data->save();
        }
        return redirect('/display')->with('sucess','update sucess');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employeee  $employeee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employeee $employeee,$id)
    {
      $data=employeee::find($id);
      $delfile=$data->file;
      $data->delete();
      unlink('upload/customer/'.$delfile);
      return redirect('/table')->with('sucess','delete sucess');
    }
}
