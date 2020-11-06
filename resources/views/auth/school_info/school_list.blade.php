@extends('layout.mainlayout')
@section('pagetitle','ALL SCHOOL PROFILE')
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
                            <h4 class="card-title">SCHOOL PROFILE</h4>
                        </div>  
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>SCHOOL NAME</th>
                                <th>EMAIL</th>
                                <th>SCHOOL TYPE</th>
                                <th>CONTACT</th>
                                <th>WEBSITE</th>
                                <th>ACTION</th>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->school_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->school_type }}</td>
                                    <td>{{ $user->contact_number }}</td>
                                    <td>{{ $user->website }}</td>
                                    <td class="action">
                                        <button class="btn btn-info"><a href="{{ route('new-school-profile.edit', $user->id) }}"><i class="fa fa-pencil text-white"></i>
                                        </a></button><br>
                                        <button class="btn btn-danger"><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete"><i class="fa fa-trash text-white"></i>
                                        <form action="{{ route('school_list.destroy', $user->id)  }}" method="post">
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
@endsection