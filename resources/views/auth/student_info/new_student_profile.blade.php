@extends('layout.mainlayout')
@section('pagetitle','ADD STUDENTS')
@section('content')
<div class="content">
  <div class="container-fluid">
    <form action="{{ route('admin.student-list.store') }}" method="POST" enctype="multipart/form-data" class="">
      @csrf
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
              <h4 class="card-title">ADMISSION FORM INFO</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">FORM NUMBER</label>
                    <input type="number" class="form-control" name="form_number">
                    @error('form_number')
                    <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">SERIAL ID</label>
                    <input type="number" class="form-control" name="serial_id">
                    @error('serial_id')
                    <span class="text-danger" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">ADMISSION NUMBER</label>
                    <input type="number" class="form-control" name="admission_number">
                    @error('admission_number')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ACADAMIC SESSION</label>
                      <select name="acadamic_year" id="acadamic_year" class="form-control">
                        <option value="">- ACADAMIC SESSION -</option>
                        @foreach($academicYear as $a)
                        <option value="{{ $a->id }}">{{$a->previous_acadamic_year}} - {{ $a->acadamic_year }}</option>
                        @endforeach
                      </select>
                        @error('acadamic_year')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label class="bmd-label-floating">SCHOOL NAME</label>
                        <select name="school_name" id="school_name" class="form-control">
                        <option value="">-SEELECT SCHOOL NAME-</option>
                        @foreach($schooldetail as $s)
                        <option value="{{ $s->id }}">{{ $s->school_name }}</option>
                        @endforeach
                        </select>
                        @error('school_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">CLASS TEACHER NAME</label>
                      <select id="class" class="form-control" name="class_teacher_name">
                        <option value="">-SEELECT CLASS-</option>
                        @foreach($users as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                      </select> 
                      @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">CLASS NAME</label>
                      <select  id="class" class="form-control" name="class_name">
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
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SECTION</label>
                      <select  class="form-control" name="sectionval">
                        <option value="">-SEELECT CLASS-</option>
                        @foreach($sec as $class)
                        <option value="{{ $class->id }}">{{ $class->section }}</option>
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
                    <label class="bmd-label-floating">ADMISSION SCHEME</label>
                    <input type="text" class="form-control" name="admission_scheme">
                      @error('admission_scheme')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror 
                  </div>
                </div>
                <div class="col-md-4">
                  <label class="bmd-label-floating">ADMISSION DATE</label>
                    <div class="form-group">
                    <input type="date" class="form-control" value="admission date" placeholder="admision date" name="admission_date">
                      @error('admission_date')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">PERSONAL INFORMATION</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">FIRST NAME</label>
                    <input type="text" class="form-control" name="first_name">
                      @error('first_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">MIDDLE NAME</label>
                    <input type="text" class="form-control" name="middle_name">
                    @error('middle_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">LASTNAME</label>
                    <input type="text" class="form-control" name="last_name">
                    @error('last_name')
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
                  <label class="bmd-label-floating">RELIGION</label>
                    <input type="text" class="form-control" name="religion"> 
                    @error('religion')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label class="bmd-label-floating">CATEGORY</label>
                    <input type="text" class="form-control" name="category">
                    @error('category')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CAST</label>
                    <input type="text" class="form-control" name="cast">
                    @error('cast')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">PLACE OF BIRTH</label>
                    <input type="text" class="form-control" name="place_of_birth">
                    @error('place_of_birth')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">MOTHER TONGUE</label>
                    <input type="text" class="form-control" name="mother_tongue">
                    @error('mother_tongue')
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
                    <label class="bmd-label-floating">GENDER</label>
                      <select name="gender" id="gender" class="form-control">
                        <option value="gender">-SEELECT GENDER-</option>
                        <option value="male">MALE</option>
                        <option value="female">FEMALE</option>
                      </select>
                      @error('gender')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">STUDENT PHOTO</label>
                    <input type="file" class="form-control-file" name="file">
                    @error('file')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">DATE OF BIRTH</label>
                    <input type="date" class="form-control" value="date_of_birth"  name="date_of_birth">
                    @error('date_of_birth')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>     
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">PARENTS INFORMATION</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">FATHER NAME</label>
                    <input type="text" class="form-control" name="father_name">
                    @error('father_name')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">FATHER CONTACT</label>
                    <input type="text" class="form-control" name="father_contact">
                    @error('father_contact')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">MOTHER NAME</label>
                    <input type="text" class="form-control" name="mother_name">
                      @error('mother_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">MOTHER CONTACT</label>
                    <input type="text" class="form-control" name="mother_contact">
                      @error('mother_contact')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">RESIDETIAL ADDRESS</label>
                    <input type="text" class="form-control" name="address">
                      @error('address')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>               
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">GUARDIAN INFORMATION</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">GUARDIAN NAME</label>
                    <input type="text" class="form-control" name="guardian_name">
                    @error('guardian_name')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">GUARDIAN ADRESS</label>
                    <input type="text" class="form-control" name="guardian_address">
                    @error('guardian_address')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">EDUCATION DETAILS</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">PREVIOUS SCHOOL</label>
                    <input type="text" class="form-control" name="previous_school">
                    @error('previous_school')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">PREVIOUS SCHOOL ADDRESS</label>
                    <input type="text" class="form-control" name="previous_school_address">
                    @error('previous_school_address')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">PREVIOUS CLASS NAME</label>
                    <input type="text" class="form-control" name="previous_class_name">
                    @error('previous_class_name')
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
                    <label class="bmd-label-floating">MEDIUM OF INSTRUCTION</label>
                    <input type="text" class="form-control" name="medium_of_instruction">
                      @error('medium_of_instruction')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">EXTRA CURRICULAR ACTIVITY</label>
                    <input type="text" class="form-control" name="extra_curricular_activity">
                      @error('extra_curricular_activity')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">HEALTH PROBLEM</label>
                    <input type="text" class="form-control" name="health_problem">
                      @error('health_problem')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">SCHOOL RECOGNISED</label>
                        <select name="recogniser" id="cars" class="form-control">
                          <option value="recogniser">-SEELECT-</option>
                          <option value="yes">YES</option>
                          <option value="no">NO</option>
                        </select>
                        @error('recogniser')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="bmd-label-floating">DATE OF LEAVING</label>
                    <div class="form-group">
                    <input type="date" class="form-control" name="date_of_leaving">
                      @error('date_of_leaving')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">DOCUMENTS</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">TRANSFER CERTIFICARE</label>
                    <select name="certificate" id="cars" class="form-control">
                      <option value="certificate">-SEELECT-</option>
                      <option value="yes">YES</option>
                      <option value="no">NO</option>
                    </select>
                    @error('certificate')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">BONAFIDE CERTIFICARE</label>
                    <select name="bonafide_certificate" id="cars" class="form-control">
                          <option value="bonafide_certificate">-SEELECT-</option>
                          <option value="yes">YES</option>
                          <option value="no">NO</option>
                    </select>
                      @error('bonafide_certificate')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">SIBLINGS DETAILS</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="bmd-label-floating">NAME</label>
                    <input type="text" id="sibname" placeholder="Name" name="name">
                      @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="bmd-label-floating">CLASS</label>
                    <input type="text" id="sibclass" placeholder="Class" name="class">
                      @error('class')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="bmd-label-floating">SECTION</label>
                    <input type="text" id="sibsection" placeholder="Section" name="section">
                      @error('section')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                  <label class="bmd-label-floating">PERCENTAGE</label>
                    <input type="text" id="sibpercentage"placeholder="Percentage" name="percentage">
                      @error('percentage')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="button" class="add-row btn btn-info pull-left" value="Add Row">
                    <input type="button" class="delete-row btn btn-danger pull-left" value="Delete Row">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <!-- <form method="post" id="dynamic_form"> -->
                 <span id="result"></span>
                  <table class="table table-borderd">
                    <thead class="text-dark">
                      <th>
                        SELECT
                      </th>
                      <th>
                        NAME
                      </th>
                      <th>
                        CLASS
                      </th>
                      <th>
                        SECTIOM
                      </th>
                      <th>
                        PERCENTAGE
                      </th>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <!-- @csrf
                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">FOR OFFICE USE</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">ADMISSION FEES DISCOUNT</label>
                    <input type="text" class="form-control" name="admission_fees_discount">
                      @error('admission_fees_discount')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">TERM FEES DISCOUNT</label>
                    <input type="text" class="form-control" name="term_fees_discount">
                      @error('term_fees_discount')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <button type="submit" class="btn-block btn btn-primary">SAVE</button>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
@section('customjs')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>
  $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});
</script>
<script>
   $(document).ready(function(){
        $(".add-row").click(function(){
            var sibname = $("#sibname").val();
            var sibclass = $("#sibclass").val();
            var sibsection = $("#sibsection").val();
            var sibpercentage = $("#sibpercentage").val();
            // alert(sibname);
            $.ajax({
            url:"{{ route("siblings.insert") }}",
            method:'POST',
            data:{sibname:sibname,sibclass:sibclass,sibsection:sibsection,sibpercentage:sibpercentage},
            success:function(data)
            {
              var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + sibname + "</td><td>" + sibclass + "</td><td>" + sibsection + "</td><td>" + sibpercentage + "</td></tr>";
              $("table tbody").append(markup);
            }
          
        })
        });
   });

   // Find and remove selected table rows
   $(".delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });
            });
          
</script>
@endsection