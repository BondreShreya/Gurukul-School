@extends('layout.mainlayout')
@section('pagetitle','SECTION')
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
            <h4 class="card-title">ADD SECTION</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('section.store') }}" method="POST" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                      <label class="bmd-label-floating">SECTION</label>
                        <input type="text" class="form-control" name="section">
                    </div>
                  </div>
                  <div class="col-md-6 mt-5">
                   <button type="submit" class="pull-right btn btn-primary">CREATE</button>
                  </div>
              </div>
             </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">SECTION LIST</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>SECTION</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($sec as $key=>$s)
                        <tr>
                          <td>
                          {{ ++$key }}
                          </td>
                          <td>
                          {{ $s->section }}
                          </td>
                          <td class="action">
                          <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete">
                          <button class="btn btn-danger"><i class="fa fa-trash text-white"></i>
                          </button>
                          </a>
                          <form action="{{ route('section.destroy', $s->id) }}" method="post">
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