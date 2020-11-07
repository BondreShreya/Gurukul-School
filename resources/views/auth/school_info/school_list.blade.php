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
                            <table class="table table-hover" id="users-table">
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
                                        <a href="{{ route('new-school-profile.edit', $user->id) }}">
                                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button>
                                        </a>
                                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" aria-describedby="tooltip680332">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </a>
                                        <form action="{{ route('school_list.destroy', $user->id)  }}" method="post">
                                            @method('DELETE')
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$users->links()}}
                        </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{route('school.index')}}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'school_name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'school_type', name: 'school_type' },
            { data: 'contact', name: 'contact' },
            { data: 'website', name: 'website' }
           
        ]
    });
});
</script>
@endsection