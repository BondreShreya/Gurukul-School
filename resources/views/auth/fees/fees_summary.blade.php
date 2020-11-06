@extends('layout.mainlayout')
@section('pagetitle','STUDENT FEES SUMMARY')
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
            <h4 class="card-title">SEARCH</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="">
              <div class="row">
             
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">FROM DATE</label>
                       <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label class="bmd-label-floating">TO DATE</label>
                      <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">CLASS</label>
                      <select  id="class" class="form-control" name="class_name">
                            <option value="">-SEELECT CLASS-</option>
                            @foreach($std as $class)
                            <option value="{{ $class->id }}">{{ $class->standard }}</option>
                            @endforeach
                        </select>  
                        @error('class_name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                  </div>
               </div>
                <button type="submit" class="btn-block btn btn-success">SEARCH</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
@endsection