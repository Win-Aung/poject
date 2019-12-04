<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('layouts.user');
         $users = Auth::User();
         return view('layouts.user', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //  $user = Auth::User();
        //  return view('layouts.setting', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = User::whereId($id)->firstOrFail();

        if(isset(request()->image)){
            $image = request()->file('image');
            $image_name = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $image->move($destinationPath,$image_name);

        }else{
            $image_name = $student->image;
        }
        // $student=new User();
         $student = User::find($id);
            $student->name = $request->name;
            $student->class = $request->class;
            $student->roll = $request->roll;
            $student->faname = $request->faname;
            $student->maname = $request->maname;
            $student->section = $request->section;
            $student->year = $request->year;
            $student->adnumber = $request->adnumber;
            $student->datepicker = $request->datepicker;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->password = bcrypt($request->password);
            $student->image = $image_name;
            $student->save();

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
