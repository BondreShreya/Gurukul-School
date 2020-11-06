@extends('layout.mainlayout')
@section('pagetitle','SCHOOL PROFILE')
@section('content')
<div class="content">
  <div class="container-fluid">
    <form action="{{ route('admin.school_list.store') }}" method="POST" enctype="multipart/form-data" class="">
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
              <h4 class="card-title">SOCIETY INFORMATION</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="bmd-label-floating">SOCIETY NAME</label>
                    <input type="text" class="form-control" name="society_name">
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
                    <input type="text" class="form-control" name="society_reg_no">
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
                    <input type="text" class="form-control" name="society_address">
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
                    <input type="text" class="form-control" name="so_city">
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
                    <input type="text" class="form-control" name="so_taluka">
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
                    <input type="text" class="form-control" name="so_district">
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
                    <input type="text" class="form-control" name="so_state">
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
                    <input type="text" class="form-control" name="so_country">
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
                    <input type="text" class="form-control" name="so_zip_code">
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
                        <input type="text" class="form-control" name="school_name">
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
                        <input type="file" name="file" id="file" class="form-control-file border">
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
                        <input type="text" class="form-control" name="school_address">
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
                        <input type="text" class="form-control" name="school_city">
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
                        <input type="text" class="form-control" name="school_taluka">
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
                        <input type="text" class="form-control" name="school_district">
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
                        <input type="text" class="form-control" name="school_zip_code">
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
                        <input type="text" class="form-control" name="school_state"> 
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
                        <input type="text" class="form-control" name="school_country">
                        @error('country')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <select name="school_type" id="school_type" class="form-control">
                          <option value="school_type">-SEELECT SCHOOL TYPE-</option>
                          <option value="convent">CONVENT</option>
                          <option value="high school">HIGH SCHOOL</option>
                          <option value="pre-primary">PRE-PRIMARY</option>
                          <option value="prathmic">PRATHMIC</option>
                          <option value="marathi">MARATHI</option>
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
                    <input type="number" class="form-control" name="contact_number">
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
                    <input type="email" class="form-control" name="email">
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
                    <input type="text" class="form-control" name="website">
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
                      <input type="number" class="form-control" name="serial_number">
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
                      <input type="number" class="form-control" name="genral_reg_no">
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
                      <input type="number" class="form-control" name="school_recog_no">
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
                      <input type="number" class="form-control" name="udise_no">
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
                      <input type="number" class="form-control" name="affiliation_name">
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
                      <input type="number" class="form-control" name="gr_number">
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
                      <input type="text" class="form-control" name="medium">
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
                      <input type="text" class="form-control" name="board">
                      @error('board')
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
    </form> 
  </div>
</div>
@endsection