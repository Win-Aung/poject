@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
   <div class="box-body">
          <div class="row">
              <div class="form-group col-md-6">
              <fieldset disabled>
              <strong>name</strong>
              <input type="text" name="name" class="form-control" placeholder="name" value="{{ $users->name }}">
              </div>
              
            </div>
        </div>
    </div>
</div>
    
@endsection