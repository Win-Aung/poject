@extends('admin.layouts.app')

@section('main-content')

<form role="form" action="{{ route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field()}}
               {{ method_field('PUT')}}
        @if(session('status'))
            <p class="alert alert-success">{{session('status')}}</p>
        @endif
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editors
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
              <a class='btn btn-success' href="{{ route('user.index')}}"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         
              <div class="box-body">
             
                <div class="form-group">
                  <label for="name">New User </label>
                  <input type="text" class="form-control" id="title" name="name" placeholder="username" value="@if (old('name')){{ old('name')}} @else{{ $user->name}} @endif">
                </div>
                
                 <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email" value="@if (old('email')){{ old('email')}} @else{{ $user->email}} @endif">
                </div>
                

                <div class="form-group">
                  <label for="phone">Phonephone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="username" value="@if (old('phone')){{ old('phone')}} @else{{ $user->phone}} @endif">
                </div>

                 <div class="form-group">
                  <label for="confirm_password">Status</label>
                  <div class="checkbox">
                 
                      
                      <label><input type="checkbox" name="status" 
                        @if (old('status')==1 || $user->status == 1 )
                          checked

                        @endif value="1"> Status</label>
                </div>
                
                 <div class="form-group">
                  @foreach ($roles as $role)
                   
                    <div class="checkbox">
                      <label><input type="checkbox" name="role[]" value="{{ $role->id}}"
                        @foreach ($user->roles as $user_role)
                         @if ($user_role->id == $role->id)
                           checked
                         @endif
                         @endforeach>{{ $role->name}}</label>
                    </div>
                  </div>
               
                  @endforeach
  
              
              <div class="box-footer">
                 <button class="btn btn-primary"  type="submit"  onclick="myFunction()">Submit</button>
              </div>
       </div>
       
        </div>
  
    </section>
    <!-- /.content -->
  </div>
</form>
@endsection