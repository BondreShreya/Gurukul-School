@extends('layout.mainlayout')
@section('pagetitle','FEES')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">STUDENT</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>SR NO.</th>
                  <th>FEES HEAD</th>
                  <th>CLASS NAME</th>                    
                  <th>ACADAMIC YEAR</th>
                  <th>SCHOOL NAME</th>
                  <th>AMOUNT</th>
                  <th>DISCEIPTION</th>
                  <th>ACTION</th>
                </thead>
                <tbody>
                 @foreach($users as $key => $user)
                 <?php 
                    $fees=DB::table('fees_head')->where('id',$user->fees_head)->first();
                    ?>               
                    <?php 
                    $name=DB::table('school_profile')->where('id',$user->school_name)->first();
                    ?>
                    <?php 
                    $class=DB::table('standerd')->where('id',$user->class_name)->first();
                    ?>
                    <?php 
                    $year=DB::table('acadamic_year')->where('id',$user->acadamic_year)->first();
                    ?> 
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{$fees->fees_head }}</td>
                      <td class="text-center">{{$class->standard}}</td>
                      <td>{{$year->previous_acadamic_year}}-{{$year->acadamic_year}}</td>
                      <td>@if(!empty($name)){{ $name->school_name}}@endif</td>
                      <td class="text-center">{{$user->amount }}</td>
                      <td>{{$user->description }}</td>
                      <td class="action">
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger  btn-link btn-sm" data-original-title="Rupee" aria-describedby="tooltip680332" style="background-color: antiquewhite;">
                            <i class="fa fa-rupee">&nbsp;Pay</i>
                            <div class="ripple-container"></div>
                          </button>
                        </a>
                        <form action="{{ route('addfees.destroy', $user->id)}}" method="post">
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