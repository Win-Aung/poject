@extends('admin.layouts.app')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@section('head')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
 
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

@section('main-content')

 <form role="form" action="{{ route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
               {{ method_field('PATCH')}}
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit 
        <small>For Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                <a class='btn btn-success' href="{{ url('admin/post/post')}}"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="box-body">
                     <div class="form-group">
                      <label for="title">Post Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title}}">
                    </div>

                    <div class="form-group">
                      <label for="title">Post Sub</label>
                      <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle" value="{{ $post->subtitle}}">
                    </div>

                   <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="subtitle" value="{{ $post->slug}}">
                  </div>

                   <div class="form-group">
                <strong>Teacher:Profile</strong><br>
                        <img src="{{url('/images/'.$post->image)}}" id="profile-img-tag" alt="" width="200" height="200">
                        <input type="file" name="image" id="image"></input>
              </div>
                   <div class="checkbox">
                    <label>
                      <input type="checkbox" name="status" value="1" @if ($post->status == 1)
                      {{'checked'}}
                      @endif>
                      Publish
                    </label>
                  </div>

                    <div class="form-group">
                <label>Select Tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="tags[]">
                  @foreach ($tags as $tag)
                  <option value="{{ $tag->id}}">{{ $tag->name}}</option>

                  @endforeach
                 
                </select>
              </div>
              <div class="form-group">
                <label>Select Category</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="categories[]">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id}}">{{ $category->name}}</option>

                  @endforeach
                </select>
              </div>
               <div class="box-body pad">
              
                <textarea class="textarea" name="body" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body}}</textarea>
                    <div class="box-footer">
              
              </div>

                    <div class="box-footer">
                    <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
                    </div>
                    
                    
                </div>   
            </div>
        </div>
    </div>
    </section>
 </div>
</form>
  <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    

@endsection





