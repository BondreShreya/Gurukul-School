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
                        <form action="{{ route ('new-attendance.update',$user->id) }}" method="POST" enctype="multipart/form-data" class="">
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
                                        @foreach($std as $s)
                                         <option value="{{ $s->standard }}" {{($s->standard== $class->standard) ? 'selected = selected' : ''}}>{{ $s->standard }}</option>
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
                                            <option value="{{ $a->acadamic_year }}" {{($a->acadamic_year== $student->acadamic_year) ? 'selected = selected' : ''}}>{{ $a->acadamic_year }}</option>
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
                                        <select name="month" id="month" class="form-control" value="{{ $user->month}}">
                                        <option value="January" {{($user->month == 'January') ? 'selected = selected' : ''}}>January</option>
                                        <option value="February" {{($user->month == 'February') ? 'selected = selected' : ''}}>February</option>
                                        <option value="March" {{($user->month == 'March') ? 'selected = selected' : ''}}>March</option>
                                        <option value="April"{{($user->month == 'April') ? 'selected = selected' : ''}}>April</option>
                                        <option value="May"{{($user->month == 'May') ? 'selected = selected' : ''}}>May</option>
                                        <option value="June"{{($user->month == 'June') ? 'selected = selected' : ''}}>June</option>
                                        <option value="July"{{($user->month == 'July') ? 'selected = selected' : ''}}>July</option>
                                        <option value="August"{{($user->month == 'August') ? 'selected = selected' : ''}}>August</option>
                                        <option value="September"{{($user->month == 'September') ? 'selected = selected' : ''}}>September</option>
                                        <option value="October"{{($user->month == 'October') ? 'selected = selected' : ''}}>October</option>
                                        <option value="November"{{($user->month == 'November') ? 'selected = selected' : ''}}>November</option>
                                        <option value="December"{{($user->month == 'December') ? 'selected = selected' : ''}}>December</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label class="bmd-label-floating">DAYS</label>
                                        <select name="gender" id="gender" class="form-control">
                                        <option value="days">-SEELECT DAYS-</option>
                                        <option value="28 days"{{($user->days == '28 days') ? 'selected = selected' : ''}}>28 DAYS</option>
                                        <option value="29 days"{{($user->days == '29 days') ? 'selected = selected' : ''}}>29 DAYS</option>
                                        <option value="30 days"{{($user->days == '30 days') ? 'selected = selected' : ''}}>30 DAYS</option>
                                        <option value="31 days"{{($user->days == '31 days') ? 'selected = selected' : ''}}>31 DAYS</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="bmd-label-floating">WORKING DAYS</label>
                                    <input type="number" class="form-control" name="days" value="{{$user->days}}">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="pull-right btn btn-primary mt-5">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection