@extends('layout.mainlayout')
@section('pagetitle','STUDENTS ATTENDANCE MASTER')
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
            <h4 class="card-title ">STUDENT ATTENDANCE</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ATTENDANCE ID</th>
                  <th>CLASS</th>
                  <th>SECTION</th>
                  <th>ACADAMIC YEAR</th>
                  <th>MONTHS</th>
                  <th>DAYS</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($user as $key =>$u)
                 <?php 
                 $class=DB::table('standerd')->where('id',$u->class_name)->first();
                 ?>
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>@if(!empty($class)){{$class->standard}}@endif</td>
                      <td>{{ $u->section }}</td>
                      <td>{{ $u->acadamic_year }}</td>
                      <td>{{ $u->month}}</td>
                      <td>{{ $u->days}}</td>
                      <td class="action">
                        <button class="btn btn-info">
                          <a href="{{ route('new-attendance.edit', $u->id) }}"><i class="fa fa-pencil text-white"></i>
                          </a>
                        </button><br>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                        <button type="button" class="btn btn-danger delete"><i class="fa fa-trash text-white"></i>
                        </button>
                        </a>
                          <form action="{{ route('new-attendance.destroy', $u->id)  }}" method="post">
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