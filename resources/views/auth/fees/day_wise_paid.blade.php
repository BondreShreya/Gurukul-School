@extends('layout.mainlayout')
@section('pagetitle','FEES PAID STUDENT LIST')
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
            <h4 class="card-title">STUDENT LIST</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="">
              <div class="row">
             
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">DATE</label>
                      <input type="date" class="form-control" name="date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">CLASS NAME</label>
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
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">ALL FEES</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    STUDENT NAME
                  </th>
                  <th>
                    CLASS
                  </th>
                  <th>
                    PAID DATE
                  </th>
                  <th>
                    PAID AMOUNT
                  </th>
                  <th>
                    TOTAL BLANCE
                  </th>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
@endsection