<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{

     public function __construct()
    {
       $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = user::where('is_approved',true)->get();
        return view('admin.student.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
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
            'class' => 'required',
            'faname' => 'required',
            'maname' => 'required',
            'section' => 'required',
            'year' => 'required',
            'adnumber' => 'required',
            'dob' => 'required',
            'phone' =>'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg',

    ]);
    if(isset(request()->image)){
       $image = $request->file('image');
       $image_name=md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('images/');
       $image->move($destinationPath, $image_name);     
        }
        else 
        {
            $image_name = $student->image;
        }
            $student=new User();
            $student->name = $request->name;
            $student->class = $request->class;
            $student->roll = $request->roll;
            $student->faname = $request->faname;
            $student->maname = $request->maname;
            $student->section = $request->section;
            $student->year = $request->year;
            $student->adnumber = $request->adnumber;
            $student->dob = $request->dob;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->password = bcrypt($request->password);
            $student->image = $image_name;
            $student->save();
               
       return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
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
        $users = User::find($id);
        return view('admin.student.edit', compact('users'));
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
            $student->dob = $request->dob;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->email = $request->email;
            $student->password = bcrypt($request->password);
            $student->image = $image_name;
            $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
        User::where('id',$id)->delete();
        return redirect()->back();
    }
}

