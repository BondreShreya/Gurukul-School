@extends('layout.mainlayout')
@section('pagetitle','ALL LIST')
@section('layout.pages.link')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endsection
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
            <h4 class="card-title">TEACHERS</h4>
          </div> 
          <div class="card-body">
            <!-- <div class="table-responsive"> -->
              <table class="table" id="myTable">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>NAME</th>
                  <th class="text-center">EMAIL</th>
                  <th>DESIGNATION</th>
                  <th class="text-center">QUALIFICATION</th>
                  <th class="text-center">IMAGE</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($users as $key => $user)
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->designation }}</td>
                    <td class="text-center">{{ $user->qualification }}</td>
                    <td class="text-center">
                      <img src="{{  URL::asset('teacherImg/' . $user->file) }}" style="width:30%">
                    </td>
                    <td class="action">
                      <a href="{{ route('edit_teacher.edit',$user->id) }}">
                        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit">
                          <i class="material-icons">edit</i>
                        </button>
                      </a>
                      <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" aria-describedby="tooltip680332">
                              <i class="material-icons">close</i>
                              <div class="ripple-container"></div>
                          </button>
                      </a>
                      <form action="{{ route('teacher_list.destroy',$user->id) }}" method="post">
                          @method('DELETE')
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
              </table>
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js
        "></script>
<!-- <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection