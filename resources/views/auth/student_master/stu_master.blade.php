@extends('layout.mainlayout')
@section('pagetitle','ALL ALLOTMENT LIST')
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
                  <th>STUDENT NAME</th>
                  <th>SCHOOL NAME</th>
                  <th>CLASS</th>
                  <th>SECTION</th>
                  <th>ACADAMIC YEAR</th>
                  <th class="text-center">ACTION</th>
                </thead>
                  <tbody>
                    @foreach($allotedStudent as $key => $a)
                      <?php 
                        $year=DB::table('student_profile')->where('id',$a->admission_id)->first();
                      ?> 
                      <?php 
                        $name=DB::table('school_profile')->where('id',$year->school_name)->first();
                      ?>
                      <?php 
                        $class=DB::table('standerd')->where('id',$year->class_name)->first();
                      ?>
                      <?php 
                        $sec=DB::table('section')->where('id',$year->section)->first();
                      ?>
                      <?php 
                       $acadamic=DB::table('acadamic_year')->where('id',$year->acadamic_year)->first();
                      ?> 
                      
                        <tr>
                          <td>{{ ++$key }}</td>
                          <td>{{ $year->first_name}}  {{ $year->middle_name}}  {{ $year->last_name}}</td>
                          <td>{{ $name->school_name}}</td>
                          <td>{{ $class->standard}}</td>
                          <td>{{ $sec->section }}</td>
                          <td>{{ $acadamic->previous_acadamic_year}}-{{$acadamic->acadamic_year}}</td>
                          <td>
                            <button class="btn-sm btn btn-info">
                              <a href="{{ route('leaving-certificate',$year->id) }}">LC</a>
                            </button>
                            <button class="btn-sm btn btn-info">
                              <a href="{{ route('bonafide-certificate', $year->id) }}">BC</a>
                            </button>
                            <button class="btn-sm btn btn-info">
                              <a href="{{ route('character-certificate',$year->id) }}">CC</a>
                            </button>
                            <button class="btn-sm btn btn-danger"><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete"><i class="fa fa-trash text-white"></i>
                            <form action="{{ route('stu_master.destroy', $a->id) }}" method="post">
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
@endsection
@section('customjs')

@endsection