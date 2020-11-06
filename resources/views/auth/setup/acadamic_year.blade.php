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
            <form action="{{ route ('admin.acadamic_year.store') }}" method="POST" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                      <label class="bmd-label-floating">ACADAMIC YEAR</label>
                        <input type="text" class="form-control" name="acadamic_year">
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">PREVIOUS ACADEMIC YEAR</label>
                      <input type="text" class="form-control" name="previous_acadamic_year">
                  </div>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">STATUS</label>
                        <select name="status" id="gender" class="form-control">
                            <option value="select">-SELECT-</option>
                            <option value="active">ACTIVE</option>
                            <option value="inactive">INACTIVE</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">DESCRIPTION</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                  </div>
              </div>
             
              <button type="submit" class="pull-right btn btn-primary">CREATE</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">ALL ACADEMIC YEARS</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>ACADAMIC YEAR</th>
                  <th>PREVIOUS ACADAMIC YEAR</th>
                  <th>STATUS</th>
                  <th>DISCRIPTION</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                   @foreach($students as $key => $s)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $s->acadamic_year }}</td>
                      <td>{{ $s->previous_acadamic_year }}</td>
                      <td>{{ $s->status }}</td>
                      <td>{{ $s->description }}</td>
                      <td class="action">
                        <button class="btn btn-info">
                          <a href="{{ route('acadamic_year.edit', $s->id) }}"><i class="fa fa-pencil text-white"></i>
                          </a>
                        </button>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                        <button type="button" class="btn btn-danger delete"><i class="fa fa-trash text-white"></i>
                        </button>
                        </a>
                          <form action="{{ route('acadamic_year.destroy', $s->id)  }}" method="post">
                            @method('DELETE')
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
   
</div>
</div>
@endsection