<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\register;
class RegisterController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return $request->all();
        request()->validate([
            'name' => 'required',
            'class' => 'required',
            'faname' => 'required',
            'maname' => 'required',
            'gender' => 'required',
            'section' => 'required',
            'year' => 'required',
            'datepicker' => 'required',
            'phone' =>'required',
            'address' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg',
        ]);
        if(isset(request()->image)){
            $image = $request->file('image');
            $image_name=md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $image->move($destinationPath, $image_name);     
        }
        else{
            $image_name = $student->image;
        }
         $student = new register();
            $student->name = $request->name;
            $student->faname = $request->faname;
            $student->maname = $request->maname;
            $student->gender = $request->gender;
            $student->section = $request->section;
            $student->year = $request->year;
            $student->class = $request->class;
            $student->datepicker = $request->datepicker;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->image = $image_name;
            $student->save();

              return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
