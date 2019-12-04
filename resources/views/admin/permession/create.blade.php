@extends('admin.layouts.app')

@section('main-content')

<form role="form" action="{{ route('permession.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
              
        @if(session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Permession 
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
              <a class='btn btn-success' href="{{ route('permession.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
              
                <div class="form-group">
                  <label for="name">permession Title</label>
                  <input type="text" class="form-control" id="title" name="name" placeholder="Title">
                </div>
                
                

                <div class="form-group">
                   <label for="for">Permision for</label>
                   <select name="for" id="for" class="form-control">
                     <option selected disable>Select Permession for</option>
                     <option value="user">User</option>
                     <option value="post">Post</option>
                      <option value="other">Other</option>
                   </select>
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
    </section>
    <!-- /.content -->
  </div>
</form>
@endsection