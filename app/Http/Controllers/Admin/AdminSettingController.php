<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminSetting;
use Illuminate\Support\Facades\Auth;

class AdminSettingController extends Controller
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
        $settings = AdminSetting::all();
        return view('admin.adminsetting.index',compact('settings'));
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
            'phone' =>'required',
            'address' => 'required',
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
            $image_name = $adminsetting->image;
        }
            $adminsetting=new AdminSetting();

            $adminsetting->name = $request->name;
            $adminsetting->phone = $request->phone;
            $adminsetting->address = $request->address;
            $adminsetting->image = $image_name;
            $adminsetting->save();

        return redirect()->route('adminsetting.index')
                        ->with('success',' successfully.');
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
        $settings = AdminSetting::find($id);
        return view('admin.adminsetting.edit', compact('settings'));
        
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
    //     request()->validate([
    //         'name' => 'required',
    //         'phone' =>'required',
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
            $image_name = $adminsetting->image;
        }
            $adminsetting = AdminSetting::find($id);
            $adminsetting->name = $request->name;
            $adminsetting->phone = $request->phone;
            $adminsetting->address = $request->address;
            $adminsetting->image = $image_name;
            $adminsetting->save();

        return redirect()->route('adminsetting.index')
                        ->with('success',' successfully.');
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
