<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\Http\Requests;

class CategoryController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('admin.category.category');
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
      $this->validate($request,[
             'name' => 'required',
             'slug' => 'required',
        ]);

        $tag= new category;
        $tag->name = $request->name;
        $tag->slug = $request->slug;

        $tag->save();

        // return redirect(route('category.index'));
        return redirect()->route('category.index')
                        ->with('success','Category created successfully.');
                       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()

    {
        $categories = category::all(); 
         return view('admin.category.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // $category = category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
        
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
             'name' => 'required',
             'slug' => 'required',
        ]);
        $tag = category::find($id);
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        // return view('category.index');
        return redirect()->route('category.index')
                        ->with('success','Category Updated successfully.');
       
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::where('id',$id)->delete();
        return redirect()->back();
    }
}
