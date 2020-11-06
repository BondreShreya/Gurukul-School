@extends('layout.mainlayout')
@section('pagetitle','STUDENT ATTENDANCE MASTER')
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
                    <h4 class="card-title">NEW STUDENT ATTENDANCE MASTER</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route ('admin.new-attendance.store') }}" method="POST" enctype="multipart/form-data" class="">
                            {{  csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CLASS</label>
                                        <select  id="class_name" class="form-control" name="class_name">
                                            <option value="">-SEELECT CLASS-</option>
                                            @foreach($std as $class)
                                            <option value="{{ $class->id }}">{{ $class->standard }}</option>
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
                                    <label class="bmd-label-floating">SECTION</label>
                                    <select name="section" id="section" class="form-control">
                                        <option value="">- Select Section -</option>
                                        @foreach($sec as $s)
                                        <option value="{{ $s->section }}">{{ $s->section }}</option>
                                        @endforeach
                                    </select>
                                        @error('section')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="bmd-label-floating">ACADAMIN YEAR</label>
                                    <select name="acadamic_year" id="acadamic_yearr" class="form-control">
                                        <option value="">- ACADAMIC SESSION -</option>
                                        @foreach($academicYear as $a)
                                        <option value="{{$a->previous_acadamic_year}} - {{ $a->acadamic_year}}">{{$a->previous_acadamic_year}} - {{ $a->acadamic_year }}</option>
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
                                        <label class="bmd-label-floating">MONTHS</label>
                                        <select name="month" id="month" class="form-control">
                                        <option value="month">-SEELECT MONTHS-</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                        </select>

                                    </div>
                                </div>
                   
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label class="bmd-label-floating">DAYS</label>
                                        <select name="days" id="days" class="form-control">
                                        <option value="days">-SEELECT DAYS-</option>
                                        <option value="28 days">28 DAYS</option>
                                        <option value="29 days">29 DAYS</option>
                                        <option value="30 days">30 DAYS</option>
                                        <option value="31 days">31 DAYS</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="bmd-label-floating">WORKING DAYS</label>
                                    <input type="number" class="form-control" name="days">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="pull-right btn btn-primary mt-5">CREATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection