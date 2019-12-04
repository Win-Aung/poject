@extends('admin.layouts.app')

@section('main-content')
<form role="form" action="{{ route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
               {{ method_field('PATCH')}}
              
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
              <a class='btn btn-success' href="{{ route('category.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
             
                <div class="form-group">
                  <label for="name">Catrgory Title</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Title"  value="{{ $category->name}}">
                </div>
                
                 <div class="form-group">
                  <label for="slug">Category Sub</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="subtitle"  value="{{ $category->slug}}">
                </div>
          

                
              </div>
              <!-- /.box-body -->

            
                  <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
            
            
          </div>
          <!-- /.box -->

         
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
 
</form>

@endsection