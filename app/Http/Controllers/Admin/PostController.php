<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\post;
use App\category;
use App\tag;
class PostController extends Controller
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

         $posts = post::all();
         $tags=tag::all();
         $categories =category::all(); 
        return view('admin.post.post', compact('posts','categories','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if(Auth::user()->can('posts.create')){
            $tags=tag::all();
         $categories =category::all(); 
         return view('admin.post.post', compact('tag','categories'));
        }
        return redirect(route('admin.home'));
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
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            // 'tag' => 'required',
            'category' => 'required',
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
            $image_name = $post->image;
        }

        $post = new post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->body = $request->body;
        $post->tag = $request->tag;
        $post->category = $request->category;
        $post->image = $image_name;
           $post->save();
           $post->tags()->sync($request->tags);
           $post->categories()->sync($request->categories);

           return redirect(route('post.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $posts = post::all();
         $tags=tag::all();
         $categories =category::all(); 
        return view('admin.post.show', compact('posts','categories','tags'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::where('id',$id)->first();
        $tags=tag::all();
        $categories =category::all(); 
        return view('admin.post.edit',compact('post','categories','tags'));
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
         //return $request->all();
          $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',

        ]);

        $post = post::find($id);
        $post->title = $request->title;
         $post->subtitle = $request->subtitle;
          $post->slug = $request->slug;
          $post->body = $request->body;
          $post->status = $request->status;
          $post->tags()->sync($request->tags);
           $post->categories()->sync($request->categories);
           $post->save();

           return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
