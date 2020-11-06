@extends('layout.mainlayout')
@section('pagetitle','ADD USER')
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
  </div>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">USER INFO</h4>
          </div>
          <div class="card-body">
          <form action="{{ route ('user_account.update',$user->id) }}" method="POST" enctype="multipart/form-data" class="">
            @method('PUT')
            {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">FULL NAME</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">EMAIL</label>
                      <input type="email" class="form-control" name="email" value="{{ $user->email}}">
                    </div>
                  </div>
                 
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">PASSWORD</label>
                      <input type="password" class="form-control" name="password" value="{{ $user->password}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">CONFIRM PASSWORD</label>
                      <input type="password" class="form-control" name="password_confirmation" value="{{ $user->password_confirmation}}">
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">MOBILE NUMBER</label>
                      <input type="number" class="form-control" name="mobileNumber" value="{{ $user->mobileNumber}}">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">USER PROFILE</label>
                        <!-- <input type="text" class="form-control" name="userProfile"> -->
                        <select name="userProfile" id="userProfile" class="form-control" value="{{ $user->userProfile}}">
                    
                      <option value="admin" {{($user->userProfile == 'admin') ? 'selected = selected' : ''}}>Admin</option>
                      <option value="highschool" {{($user->userProfile == 'highschool') ? 'selected = selected' : ''}}>Highschool</option>
                      <option value="primaryschool" {{($user->userProfile == 'primaryschool') ? 'selected = selected' : ''}}>Primaryschool</option>
                      <option value="marathischool" {{($user->userProfile == 'marathischool') ? 'selected = selected' : ''}}>Marathischool</option>
                      <option value="accountant" {{($user->userProfile == 'accountant') ? 'selected = selected' : ''}}>Accountant</option>
                      <option value="teacher" {{($user->userProfile == 'teacher') ? 'selected = selected' : ''}}>Teacher</option>
                   
                    </select>
                 
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">DESCRIPTION</label>
                      <input type="text" class="form-control" name="description" value="{{ $user->description}}">
                    </div>
                  </div>
              </div>
              <button type="submit" class="pull-right  btn btn-primary">UPDATE</button>
            </form>
          </div>
        </div>
      </div>
    
    </div>
   
</div>
</div>
@endsection