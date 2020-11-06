@extends('layout.mainlayout')
@section('pagetitle','ADD TEACHER')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
          </div>
          @endif
          @if ($message = Session::get('danger'))
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
          </div>
          @endif
        <div class="card">
           <div class="card-header card-header-primary">
             <h4 class="card-title">TEACHER REGISTRATION</h4>
           </div>
            <div class="card-body">
              <form action="{{ route('teacher_list.store') }}" method="POST" enctype="multipart/form-data" class="">
              @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">NAME</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">EMAIL</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">DESIGNATION</label>
                      <input type="text" class="form-control" name="designation">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">QUALIFICATION</label>
                      <input type="text" class="form-control" name="qualification">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">TEACHER PHOTO</label>
                      <input type="file" class="form-control-file" name="file">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </from>
            </div>
        </div>
      </div>     
    </div>
  </div>
</div>  
@endsection