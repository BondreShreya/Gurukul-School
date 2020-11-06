@extends('layout.mainlayout')
@section('pagetitle','SCHOOL PROFILE')
@section('content')
<div class="content">
  <div class="container-fluid">
  <form action="{{ route('new-school-profile.update', $users->id) }}" method="POST" enctype="multipart/form-data" class="">
    @method('PUT')
    {{ csrf_field() }}
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
              <h4 class="card-title">SOCIETY INFORMATION</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">SOCIETY NAME</label>
                    <input type="text" class="form-control" name="society_name" value="{{ $users->society_name}}">
                    @error('society_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">SOCIETY REG. NO.</label>
                    <input type="text" class="form-control" name="society_reg_no" value="{{ $users->society_reg_no}}">
                    @error('society_reg_no')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SOCIETY ADDRESS</label>
                    <input type="text" class="form-control" name="society_address" value="{{ $users->society_address}}">
                    @error('society_address')
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
                    <label class="bmd-label-floating">CITY</label>
                    <input type="text" class="form-control" name="so_city" value="{{ $users->so_city}}">
                    @error('city')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">TALUKA</label>
                    <input type="text" class="form-control" name="s0_taluka" value="{{ $users->so_taluka}}">
                    @error('taluka')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">DISTRICT</label>
                    <input type="text" class="form-control" name="so_district" value="{{ $users->so_district}}">
                    @error('district')
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
                    <label class="bmd-label-floating">STATE</label>
                    <input type="text" class="form-control" name="so_state" value="{{ $users->so_state}}">
                    @error('state')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">COUNTRY</label>
                    <input type="text" class="form-control" name="so_country" value="{{ $users->so_country}}">
                    @error('country')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">ZIP CODE</label>
                    <input type="text" class="form-control" name="so_zip_code" value="{{ $users->so_zip_code}}">
                    @error('zip_code')
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
            <h4 class="card-title">SCHOOL DETAILS</h4>
          </div>
          <div class="card-body">
          
              <div class="row">
        
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">SCHOOL NAME</label>
                    <input type="text" class="form-control" name="school_name" value="{{ $users->school_name}}">
                    @error('school_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="">SCHOOL LOGO</label>
                    <input type="file" class="form-control-file" name="file">
                      <img src="{{  URL::asset('schoolLogo/' . $users->file) }}"  style="width:50%">
                      <input type="hidden" class="form-control-file" name="hidden_image" value="{{ $users->file}}">
                    @error('file')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SCHOOL ADDRESS</label>
                    <input type="text" class="form-control" name="school_address" value="{{ $users->school_address}}">
                    @error('school_address')
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
                    <label class="bmd-label-floating">CITY</label>
                    <input type="text" class="form-control" name="school_city" value="{{ $users->school_city}}">
                    @error('city')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">TALUKA</label>
                    <input type="text" class="form-control" name="school_taluka" value="{{ $users->school_taluka}}">
                    @error('taluka')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">DISTRICT</label>
                    <input type="text" class="form-control" name="school_district" value="{{ $users->school_district}}">
                    @error('district')
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
                    <label class="bmd-label-floating">ZIP CODE</label>
                    <input type="text" class="form-control" name="school_zip_code" value="{{ $users->school_zip_code}}">
                    @error('zip_code')
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
                    <label class="bmd-label-floating">STATE</label>
                    <input type="text" class="form-control" name="school_state" value="{{ $users->school_state}}"> 
                    @error('state')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">COUNTRY</label>
                    <input type="text" class="form-control" name="school_country" value="{{ $users->school_country}}">
                    @error('country')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select name="school_type" id="school_type" class="form-control" value="{{ $users->school_type}}">
                      <option value="">-SEELECT SCHOOL TYPE-</option>
                      <option value="convent"{{($users->school_type == 'convent') ? 'selected = selected' : ''}}>CONVENT</option>
                      <option value="high school" {{($users->school_type == 'high schoo') ? 'selected = selected' : ''}}>HIGH SCHOOL</option>
                      <option value="pre-primary" {{($users->school_type == 'pre-primary') ? 'selected = selected' : ''}}>PRE-PRIMARY</option>
                      <option value="prathmic" {{($users->school_type == 'prathmic') ? 'selected = selected' : ''}}>PRATHMIC</option>
                      <option value="marathi" {{($users->school_type == 'marathi') ? 'selected = selected' : ''}}>MARATHI</option>
                    </select> 
                    @error('school_type')
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
            <h4 class="card-title">CONTACT DETAILS</h4>
          </div>
          <div class="card-body">
        
              <div class="row">
        
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CONCTACT NUMBER</label>
                    <input type="number" class="form-control" name="contact_number" value="{{ $users->contact_number}}">
                    @error('contact_number')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">EMAIL</label>
                    <input type="email" class="form-control" name="email" value="{{ $users->email}}">
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">WEBSITE</label>
                    <input type="text" class="form-control" name="website" value="{{ $users->website}}">
                    @error('website')
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
            <h4 class="card-title">SCHOOL LEGAL DETAILS</h4>
          </div>
          <div class="card-body">
          
              <div class="row">
        
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SERIAL NUMBER</label>
                    <input type="number" class="form-control" name="serial_number" value="{{ $users->serial_number}}">
                    @error('serial_number')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">GENERAL REG. NO.</label>
                    <input type="number" class="form-control" name="genral_reg_no" value="{{ $users->genral_reg_no}}">
                    @error('genral_reg_no')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SCHOOL RECOG. NO.</label>
                    <input type="number" class="form-control" name="school_recog_no" value="{{ $users->school_recog_no}}">
                    @error('school_recog_no')
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
                    <label class="bmd-label-floating">UDISE. NO.</label>
                    <input type="number" class="form-control" name="udise_no" value="{{ $users->udise_no}}">
                    @error('udise_no')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">AFFILIATION NUMBER</label>
                    <input type="number" class="form-control" name="affiliation_name" value="{{ $users->affiliation_name}}">
                    @error('affiliation_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">GR. NUMBER</label>
                    <input type="number" class="form-control" name="gr_number" value="{{ $users->gr_number}}">
                    @error('gr_number')
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
                    <label class="bmd-label-floating">MEDIUM.</label>
                    <input type="text" class="form-control" name="medium" value="{{ $users->medium}}">
                    @error('medium')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">BOARD</label>
                    <input type="text" class="form-control" name="board" value="{{ $users->board}}">
                    @error('board')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"> 
                  <button type="submit" class=" btn-block btn btn-primary">UPDATE</button>
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