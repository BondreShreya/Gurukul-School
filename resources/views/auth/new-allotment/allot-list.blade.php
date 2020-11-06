@extends('layout.mainlayout')
@section('pagetitle','ALL ALLOTMENT LIST')
@section('custom_styles')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            <h4 class="card-title ">ALLOTMENT LIST</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>CLASS</th>
                  <th>SECTION</th>
                  <th>ACADAMIC YEAR</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($users as $key => $user)
                  <?php 
                    $year=DB::table('acadamic_year')->where('id',$user->acadamic_year)->first();
                  ?> 
                  <?php 
                    $class=DB::table('standerd')->where('id',$user->class_name)->first();
                  ?>
                   <?php 
                    $sec=DB::table('section')->where('id',$user->section)->first();
                  ?>
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>@if(!empty($class)){{$class->standard}}@endif</td>
                        <td>{{ $sec->section }}</td>
                        <td>{{ $year->previous_acadamic_year}}-{{$year->acadamic_year}}</td>
                     
                   
                        <td class="action">
                          <button class="btn-sm btn btn-info"><a href="{{ route('edit-allot.edit', $user->id) }}"><i class="fa fa-pencil text-white"></i>
                          </a></button>
                          <button class="btn-sm btn btn-info"><a href="{{ route('view-allot.show',$user->id) }}"><i class="fa fa-eye text-white"></i>
                          </a></button>
                          <button type="button" class="btn-sm btn btn-info allotment_id" data-id="{{ $user->id }}"><i class="fa fa-print text-white"></i>
                          </button>
                          <button class="btn-sm btn btn-danger"><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete"><i class="fa fa-trash text-white"></i>
                         
                          <form action="{{ route('allot.destroy',$user->id) }}" method="post">
                              @method('DELETE')
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          </form>
                          </a>
                          </button>
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
<div id="userInfo" style="display: none;">
</div>
@endsection
@section('customjs')
<script>
$(document).ready(function(){
    $('.allotment_id').on('click',function(){
      var query = $(this).data('id');
      
        $('#userInfo').load('print-list/'+query,function(){
        
            var printContent = document.getElementById('userInfo');
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write(printContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        });
    });
});
</script>
@endsection
