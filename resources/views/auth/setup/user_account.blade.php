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
          <form action="{{ route ('admin.user_account.store') }}" method="POST" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">FULL NAME</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label class="bmd-label-floating">EMAIL</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                  </div>
                 
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">PASSWORD</label>
                      <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">CONFIRM PASSWORD</label>
                      <input type="password" class="form-control" name="password_confirmation">
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">MOBILE NUMBER</label>
                      <input type="number" class="form-control" name="mobileNumber">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">USER PROFILE</label>
                        <!-- <input type="text" class="form-control" name="userProfile"> -->
                        <select name="userProfile" id="userProfile" class="form-control">
                      <option value="Admin">- Select Standard -</option>
                    
                      <option value="Admin">Admin</option>
                      <option value="Highschool">Highschool</option>
                      <option value="Primaryschool">Primaryschool</option>
                      <option value="Marathischool">Marathischool</option>
                      <option value="Accountant">Accountant</option>
                      <option value="Teacher">Teacher</option>
                   
                    </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">DESCRIPTION</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                  </div>
              </div>
              <button type="submit" class="pull-right  btn btn-primary">CREATE</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">USERS</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    NAME
                  </th>
                  <th>
                   USER PROFILE
                  </th>
                  <th>
                  EMAIL
                  </th>
                  <th>
                   MOBILE
                  </th>
                    <th>
                    ACTION
                  </th>
                </thead>
                 <tbody>
                 @foreach($user as $key => $u)
                    <tr>
                      <td>
                      {{ ++$key }}
                      </td>
                      <td>
                      {{ $u->name }}
                      </td>
                      <td>
                      {{ $u->userProfile }}
                      </td>
                      <td>
                      {{ $u->email }}
                      </td>
                      <td>
                      {{ $u->mobileNumber }}
                      </td>
                      <td class="action">
                      <a href="{{ route('user_account.edit', $u->id) }}" class="edit  mr-3"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete"><i class="fa fa-trash"></i></a>
                          <form action="{{ route('user_account.destroy', $u->id)  }}" method="post">
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