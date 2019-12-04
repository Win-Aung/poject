<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use App\Model\admin\role;

class TeacherController extends Controller
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
        $teachers = admin::all();
         return view('admin.teacher.index',compact('teachers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = role::all();
         return view('admin.teacher.create',compact('roles'));
        //return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request->all();
    //      request()->validate([

    //         'name' => 'required',
    //         'email' => 'required',
    //         'class' => 'required',
    //         'roll' => 'required',
    //         'dob' => 'required',
    //         'phone' => 'required|min:10',
    //         'address' => 'required',
    //         'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg',

    // ]);
    if(isset(request()->image)){
       $image = $request->file('image');
       $image_name=md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('images/');
       $image->move($destinationPath, $image_name);     
        }
        else 
        {
            $image_name = $teacher->image;
        }
            $teacher=new admin();
            $teacher->name = $request->name;
            $teacher->email = $request->email;
            $teacher->password = bcrypt($request->password);
            $teacher->phone = $request->phone;
            $teacher->status = $request->status;
            $teacher->address = $request->address;
            $teacher->roll = $request->roll;
            $teacher->class = $request->class;
            $teacher->dob = $request->dob;
            $teacher->phone = $request->phone;
            $teacher->image = $image_name;
           
            $teacher->save();
             $teacher->roles()->sync($request->role);
               
       return redirect()->route('teachers.index')
                        ->with('success','Teacher created successfully.');
    }
       
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
         return view('admin.teacher.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  return view('teachers.edit',compact('teacher'));
        $teachers = admin::find($id);
        $roles = role::all();
        return view('admin.teacher.edit', compact('teachers','roles'));
        
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
        $teacher = admin::whereId($id)->firstOrFail();

        if(isset(request()->image)){
            $image = request()->file('image');
            $image_name = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images/');
            $image->move($destinationPath,$image_name);

        }else{
            $image_name = $teacher->image;
        }
        $student = admin::find($id);
            $teacher->name = $request->name;
            $teacher->email = $request->email;
            $teacher->password = bcrypt($request->password);
            $teacher->phone = $request->phone;
            $teacher->status = $request->status;
            
            $teacher->address = $request->address;
            $teacher->roll = $request->roll;
            $teacher->class = $request->class;
            $teacher->dob = $request->dob;
            $teacher->phone = $request->phone;
            
            $teacher->image = $image_name;
           
            $teacher->save();
            $teacher->roles()->sync($request->role);
        // return redirect()->route('admin.teacher.index');
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::where('id',$id)->delete();
        return redirect()->back();
        // $teacher->delete();
        // return redirect()->route('teachers.index')
        //                 ->with('success','Teacher deleted successfully');  

                        
    }
}
