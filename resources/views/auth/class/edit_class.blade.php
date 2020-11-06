@extends('layout.mainlayout')
@section('pagetitle','CLASS')
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
            <h4 class="card-title">UPDATE CLASS</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('class.update',$class->id) }}" method="POST" enctype="multipart/form-data" class="">
               @method('PUT')
               {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Standard</label>
                    <select name="standard" id="standard" class="form-control">
                      <option value="">- Select Standard -</option>
                      @foreach($std as $s)
                      <option value="{{ $s->standard }}" {{($s->standard== $class->standard) ? 'selected = selected' : ''}}>{{ $s->standard }}</option>
                      @endforeach
                    </select>
                      @error('standard')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Section</label>
                    <select name="section" id="section" class="form-control" >
                      @foreach($sec as $s)
                      <option value="{{ $s->section}}" {{($s->section== $class->section) ? 'selected = selected' : ''}}>{{ $s->section}}</option>
                      @endforeach
                    </select>
                    @error('section')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
</div>
</div>
@endsection