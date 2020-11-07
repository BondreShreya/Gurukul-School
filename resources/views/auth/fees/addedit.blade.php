@extends('layout.mainlayout')
@section('pagetitle','FEES')
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
            <h4 class="card-title">ADD FEES</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('addfees.update', $users->id) }}" method="POST" enctype="multipart/form-data" class="">
             @method('PUT')
               {{ csrf_field() }}
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">FEES HEAD</label>
                      <select name="fees_head" id="fees_head" class="form-control">
                        <option value="head">-SEELECT FEES HEAD-</option>
                        @foreach($fees as $fee)
                          <option value="{{ $fee->id }}" {{($fee->id== $users->fees_head) ? 'selected = selected' : ''}}>{{ $fee->fees_head }}</option>
                        @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CLASS NAME</label>
                      <select  id="class" class="form-control" name="class_name">
                        <option value="">-SEELECT CLASS-</option>
                         @foreach($std as $class)
                            <option value="{{ $class->id }}" {{($class->id== $users->class_name) ? 'selected = selected' : ''}}>{{ $class->standard }}</option>
                          @endforeach
                      </select>  
                      @error('class_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">ACADEMIC YEAR</label>
                    <select name="acadamic_year" id="acadamic_yearr" class="form-control">
                        <option value="">- ACADAMIC SESSION -</option>
                        @foreach($academicYear as $a)
                          <option value="{{$a->id}} " {{($a->id== $users->acadamic_year) ? 'selected = selected' : ''}}>{{$a->previous_acadamic_year}}-{{ $a->acadamic_year }}</option>
                        @endforeach
                    </select>
                    @error('acadamic_year')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SCHOOL NAME</label>
                      <select name="school_name" id="school_name" class="form-control">
                        <option value="">-SEELECT SCHOOL NAME-</option>
                        @foreach($schooldetail as $s)
                          <option value="{{ $s->id }}" {{($s->id== $users->school_name) ? 'selected = selected' : ''}}>{{ $s->school_name }}</option>
                        @endforeach
                      </select>
                      @error('school_name')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">AMOUNT</label>
                    <input type="number" class="form-control" name="amount" value="{{ $users->amount}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">DESCRIPTION</label>
                    <input type="text" class="form-control" name="description" value="{{ $users->description}}"> 
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