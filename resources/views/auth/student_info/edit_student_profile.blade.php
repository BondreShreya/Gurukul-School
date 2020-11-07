@extends('layout.mainlayout')
@section('pagetitle','ADD STUDENTS')
@section('content')
<div class="content">
    <div class="container-fluid">
      <form action="{{ route('new_student_profile.update', $student->id) }}" method="POST" enctype="multipart/form-data" class="">
          @csrf
          @method('PUT')
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
                          <input type="number" class="form-control" name="form_number"  value="{{ $student->form_number}}">
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
                          <input type="number" class="form-control" name="serial_id" value="{{ $student->serial_id}}">
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
                          <input type="number" class="form-control" name="admission_number" value="{{ $student->admission_number}}">
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
                               <option value="">-SEELECT ACADAMIC SECTION-</option>
                                @foreach($academicYear as $a)
                                 <option value="{{$a->id}} " {{($a->id== $student->acadamic_year) ? 'selected = selected' : ''}}>{{$a->previous_acadamic_year}}-{{ $a->acadamic_year }}</option>
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
                          <select name="school_name" id="school_name" class="form-control" value="{{ $student->school_name}}">
                            <option value="">-SEELECT SCHOOL NAME-</option>
                            @foreach($schooldetail as $s)
                              <option value="{{ $s->id }}" {{($s->id== $student->school_name) ? 'selected = selected' : ''}}>{{ $s->school_name }}</option>
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
                        <label class="bmd-label-floating">TEACHER NAME</label>
                          <select name="class_teacher_name" id="class_teacher_name" class="form-control" value="{{ $student->name}}">
                            <option value="">-TEACHER NAME-</option>
                            @foreach($users as $class)
                              <option value="{{ $class->id }}" {{($class->id== $student->class_teacher_name) ? 'selected = selected' : ''}}>{{ $class->name }}</option>
                            @endforeach   
                          </select>
                            @error('class_teacher_name')
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
                            <option value="{{ $class->id }}" {{($class->id== $student->class_name) ? 'selected = selected' : ''}}>{{ $class->standard }}</option>
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
                          <select id="section" class="form-control" name="section">
                            <option value="">-SEELECT CLASS-</option>
                            @foreach($sec as $class)
                            <option value="{{ $class->id }}" {{($class->id== $student->section) ? 'selected = selected' : ''}}>{{ $class->section }}</option>
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
                          <input type="text" class="form-control" name="admission_scheme" value="{{ $student->admission_scheme}}">
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
                          <input type="date" class="form-control"  placeholder="admision date" name="admission_date" value="{{ $student->admission_date}}">
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
                          <input type="text" class="form-control" name="first_name" value="{{ $student->first_name}}">
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
                          <input type="text" class="form-control" name="middle_name" value="{{ $student->middle_name}}">
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
                          <input type="text" class="form-control" name="last_name" value="{{ $student->last_name}}">
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
                          <input type="text" class="form-control" name="religion" value="{{ $student->religion}}"> 
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
                          <input type="text" class="form-control" name="category" value="{{ $student->category}}">
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
                          <input type="text" class="form-control" name="cast" value="{{ $student->cast}}">
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
                          <input type="text" class="form-control" name="place_of_birth" value="{{ $student->place_of_birth}}">
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
                          <input type="text" class="form-control" name="mother_tongue" value="{{ $student->mother_tongue}}">
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
                            <select name="gender" id="gender" class="form-control" value="{{ $student->gender}}">
                              <option value="male" {{($student->gender == 'male') ? 'selected = selected' : ''}}>MALE</option>
                              <option value="female" {{($student->gender == 'female') ? 'selected = selected' : ''}}>FEMALE</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">STUDENT PHOTO</label>
                          <input type="file" class="form-control-file" name="file">
                          <img src="{{  URL::asset('studentImg/' . $student->file) }}"  style="width:50%">
                          <input type="hidden" class="form-control-file" name="hidden_image" value="{{ $student->file}}">
                          @error('file')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-4">
                       <label class="bmd-label-floating">DATE OF BIRTH</label>
                        <div class="form-group">
                        <input type="date" class="form-control" value="{{ $student->date_of_birth}}" placeholder="date of birth" name="date_of_birth" value="{{ $student->date_of_birth}}">
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
                          <input type="text" class="form-control" name="father_name" value="{{ $student->father_name}}">
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
                          <input type="text" class="form-control" name="father_contact" value="{{ $student->father_contact}}">
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
                        <input type="text" class="form-control" name="mother_name" value="{{ $student->mother_name}}">
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
                        <input type="text" class="form-control" name="mother_contact" value="{{ $student->mother_contact}}">
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
                        <input type="text" class="form-control" name="address" value="{{ $student->address}}">
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
                          <input type="text" class="form-control" name="guardian_name" value="{{ $student->guardian_name}}">
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
                          <input type="text" class="form-control" name="guardian_address" value="{{ $student->guardian_address}}">
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
                          <input type="text" class="form-control" name="previous_school" value="{{ $student->previous_school}}">
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
                          <input type="text" class="form-control" name="previous_school_address" value="{{ $student->previous_school_address}}">
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
                          <input type="text" class="form-control" name="previous_class_name" value="{{ $student->previous_class_name}}">
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
                        <input type="text" class="form-control" name="medium_of_instruction" value="{{ $student->medium_of_instruction}}">
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
                        <input type="text" class="form-control" name="extra_curricular_activity" value="{{ $student->extra_curricular_activity}}">
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
                        <input type="text" class="form-control" name="health_problem" value="{{ $student->health_problem}}">
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
                              <option value="yes" {{($student->recogniser == 'yes') ? 'selected = selected' : ''}}>YES</option>
                              <option value="no" {{($student->recogniser == 'no') ? 'selected = selected' : ''}}>NO</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="bmd-label-floating">DATE OF LEAVING</label>
                        <div class="form-group">
                        <input type="date" class="form-control" name="date_of_leaving" value="{{ $student->date_of_leaving}}">
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
                            <select name="certificate" id="certificate" class="form-control">
                              <option value="recogniser">-SEELECT-</option>
                              <option value="yes" {{($student->certificate == 'yes') ? 'selected = selected' : ''}}>YES</option>
                              <option value="no" {{($student->certificate == 'no') ? 'selected = selected' : ''}}>NO</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">BONAFIDE CERTIFICARE</label>
                          <select name="bonafide_certificate" id="bonafide_certificate" class="form-control">
                              <option value="recogniser">-SEELECT-</option>
                              <option value="yes" {{($student->bonafide_certificate == 'yes') ? 'selected = selected' : ''}}>YES</option>
                              <option value="no" {{($student->bonafide_certificate == 'no') ? 'selected = selected' : ''}}>NO</option>
                          </select>
                      </div>
                    </div>
                  </div>
                 </div>
                
              </div>
              
            </div>
        
          </div>
         
          <!-- <div class="row">
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
                        <input type="text" id="name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <label class="bmd-label-floating">CLASS</label>
                        <input type="text" id="class1" placeholder="Class">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <label class="bmd-label-floating">SECTION</label>
                        <input type="text" id="section" placeholder="Section">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <label class="bmd-label-floating">PERCENTAGE</label>
                        <input type="text" id="percentage"placeholder="Percentage">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                      <input type="button" class="add-row btn btn-info" value="Add Row">
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-body">
                  <div class="table-responsive">
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
                    <button type="button" class="delete-row btn btn-danger">Delete Row</button>
                  </div>
                </div>
       
                </div>
              </div>
            </div>
           
          </div> -->
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
                        <input type="text" class="form-control" name="admission_fees_discount" value="{{ $student->admission_fees_discount}}">
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
                        <input type="text" class="form-control" name="term_fees_discount" value="{{ $student->term_fees_discount}}">
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
                  <button type="submit" class="btn-block btn btn-primary">UPDATE</button>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
         
    </div>
    
</div>
@endsection