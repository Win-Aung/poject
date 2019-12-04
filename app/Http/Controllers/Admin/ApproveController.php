<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\form;
use App\Subscriber;
use App\Notifications\AuthorPostApproved;
use App\Notifications\NewPostNotify;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\User;

class ApproveController extends Controller
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
        $posts = User::where('is_approved',false)->get();
        return view('admin.approve.show',compact('posts'));
         // $students = form::all();
         // return view('admin.approve.show',compact('students'))
         //    ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function pending()
    {
       
        $posts = User::where('is_approved',false)->get();
        return view('admin.approve.show',compact('posts'));
    }


    public function approval($id)
    {

        //return Request::all();
        $post = User::find($id);
        if ($post->is_approved == false) {
            $post->is_approved = true;
            $post->save();
            return redirect()->back();
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
        return view('admin.approve.edit', compact('users'));
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

        return redirect()->route('approve.index');
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
