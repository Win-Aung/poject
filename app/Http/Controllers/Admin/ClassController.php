<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\crole;
use DB;

class ClassController extends Controller
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
       $croles = crole::all();
       return view('admin.class.index', compact('croles'));
        //return redirect('class.index' ,compact('croles'));
        
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
             'country' => 'required',
             'state' => 'required',
             'city' => 'required',
        ]);

        $class= new crole;
        $class->country = $request->country;
        $class->state = $request->state;
        $class->city = $request->city;
        $class->save();

        return redirect(route('class.index'))->with('status','Successfually Insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $croles = crole::all();
       return view('admin.class.index', compact('croles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $croles = crole::find($id);
       
        return view('admin.class.edit', compact('croles'));
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
         $this->validate($request,[
          'country' => 'required',
           
             'state' => 'required',

           
             'city' => 'required',
         ]);

         $croles = crole::find($id);
        $croles->country = $request->country;
        $croles->state = $request->state;
        $croles->city = $request->city;

        $croles->save();
       
        
        return redirect(route('class.index'))->with('status','Successfually Insert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        crole::where('id',$id)->delete();
        return redirect()->back();
    }


    function search()
    {
     $country_list = DB::table('croles')->get();
     //return view('class.index')->with('country_list', $country_list);
    // return view('admin.class.index', compact('country_list'));
    }
}
