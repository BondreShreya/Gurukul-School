@extends('layout.mainlayout')
@section('pagetitle','FEES HEAD')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
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
                <h4 class="card-title">ADD FEES HEAD</h4>
            </div>
            <div class="card-body">
                <form action="{{ route ('fees_head.update',$users->id) }}" method="POST" enctype="multipart/form-data" class="">
                @method('PUT')
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">FEES HEAD</label>
                        <select name="fees_head" id="fees_head" class="form-control" value="{{ $users->fees_head}}">
                            <option value="admission" {{($users->fees_head == 'admission') ? 'selected = selected' : ''}}>ADMISSION</option>
                            <option value="covid-19 contribution" {{($users->fees_head == 'covid-19 contribution') ? 'selected = selected' : ''}}>COVID-19 CONTRIBUTION</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">DESCRIPTION</label>
                        <input type="text" class="form-control" name="description" value="{{ $users->description}}">
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Update</button>
                </form>
            </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection