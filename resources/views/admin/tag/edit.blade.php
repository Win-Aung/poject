@extends('admin.layouts.app')

@section('main-content')

<form role="form" action="{{ route('tag.update',$tag->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
               {{ method_field('PATCH')}}
              
        @if(session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
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
             <a class='btn btn-success' href="tag"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
        
              <div class="box-body">
              
                <div class="form-group">
                  <label for="name">Tag Title</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Title" value="{{ $tag->name}}">
                </div>
                
                 <div class="form-group">
                  <label for="slug">Tag Sub</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="subtitle" value="{{ $tag->slug}}">
                </div>

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
              </div>
            
          </div>
          <!-- /.box -->

         
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
</form>
@endsection