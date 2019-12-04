<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\Permession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PermessionController extends Controller
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
        $permessions = Permession::all();
        return view('admin.permession.show', compact('permessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permession.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
             'name' => 'required',
              'for' => 'required'

        ]);

        $permession= new Permession;
        $permession->name = $request->name;
        $permession->for = $request->for;

        $permession->save();
        return redirect()->route('permession.index')
                        ->with('success','permession created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Permession  $permession
     * @return \Illuminate\Http\Response
     */
    public function show(Permession $permession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\Permession  $permession
     * @return \Illuminate\Http\Response
     */
    public function edit(Permession $permession)
    {
        $permession = Permession::find($permession->id);

        return view('admin.permession.edit', compact('permession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Permession  $permession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permession $permession)
    {
         $this->validate($request,[
             'name' => 'required',
           
             'for' => 'required',

        ]);

        $permession= Permession::find($permession->id);
        $permession->name = $request->name;
        $permession->for = $request->for;
        $permession->save();

        
        return redirect(route('permession.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Permession  $permession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permession $permession)
    {
         Permession::where('id',$permession->id)->delete();
          return redirect()->back();
        
    }
}
