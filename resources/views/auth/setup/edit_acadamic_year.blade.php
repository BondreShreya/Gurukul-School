@extends('layout.mainlayout')
@section('pagetitle','ACADEMIC YEAR')
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
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">ADD ACADEMIC YEAR</h4>
          </div>
          <div class="card-body">
            <form action="{{ route ('acadamic_year.update',$students->id) }}" method="POST" enctype="multipart/form-data" class="">
            @method('PUT')
            {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                      <label class="bmd-label-floating">ACADAMIC YEAR</label>
                        <input type="text" class="form-control" name="acadamic_year" value="{{ $students->acadamic_year}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">PREVIOUS ACADEMIC YEAR</label>
                      <input type="text" class="form-control" name="previous_acadamic_year" value="{{ $students->previous_acadamic_year}}">
                  </div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">STATUS</label>
                        <select name="status" id="gender" class="form-control" value="{{ $students->status}}">
                            <option value="active" {{($students->ststus == 'active') ? 'selected = selected' : ''}}>ACTIVE</option>
                            <option value="inactive" {{($students->ststus == 'inactive') ? 'selected = selected' : ''}}>INACTIVE</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">DESCRIPTION</label>
                      <input type="text" class="form-control" name="description" value="{{ $students->description}}">
                    </div>
                  </div>
              </div>
             
              <button type="submit" class="pull-right btn btn-primary">UPDATE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
   
</div>
</div>
@endsection