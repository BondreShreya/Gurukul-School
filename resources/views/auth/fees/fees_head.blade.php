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
            <form action="{{ route ('admin.fees_head.store') }}" method="POST" enctype="multipart/form-data" class="">
              {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">FEES HEAD</label>
                        <select name="fees_head" id="fees_head" class="form-control">
                          <option value="fees">-SEELECT FEES HEAD-</option>
                          <option value="admission">ADMISSION</option>
                          <option value="contribution">COVID-19 CONTRIBUTION</option>
                        </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">DESCRIPTION</label>
                      <input type="text" class="form-control" name="description">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn-block btn btn-success">CREATE</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">ALL UG FEES HEAD</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>FEES HEAD ID</th>
                  <th>FEES HEAD</th>
                  <th>DISCEIPTION</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($users as $key => $u)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $u->fees_head }}</td>
                      <td>{{ $u->description }}</td>
                      <td class="action">
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                        <button type="button" class="btn btn-danger delete"><i class="fa fa-trash text-white"></i>
                        </button>
                        </a>
                          <form action="{{ route('fees_head.destroy', $u->id)  }}" method="post">
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