<?php

namespace App\Http\Controllers;
use App\Assignment;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
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
        $users = Auth::User();
        return view('assigment', compact('users'));
        // return view('assigment');
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
        request()->validate([
           
            'name' => 'required',
            'sub' => 'required',
            'year' => 'required',
            'sdob' => 'required',
            'gender' => 'required',
            'phone' =>'required',
            'image' => 'required',
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
         $student = new Assignment();
           
            $student->name = $request->name;
            $student->sub = $request->sub;
            $student->year = $request->year;
            $student->sdob = $request->sdob;
            $student->gender = $request->gender;
            $student->phone = $request->phone;
            $student->image = $image_name;       
            $student->save();

              return redirect()->route('assigment.index')
                            ->with('success','assigment successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
