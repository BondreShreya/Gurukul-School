@extends('layout.mainlayout')
@section('pagetitle','STANDARD')
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
            <h4 class="card-title">ADD STANDERED</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('standard.store') }}" method="POST" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
              <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                      <label class="bmd-label-floating">STANDARD</label>
                        <input type="text" class="form-control" name="standard">
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
            <h4 class="card-title ">STANDERED LIST</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>STANDARD</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                 @foreach($std as $key=>$s)
                        <tr>
                          <td>
                          {{ ++$key }}
                          </td>
                          <td>
                          {{ $s->standard }}
                          </td>
                          <td class="action">
                          <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete">
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" aria-describedby="tooltip680332">
                              <i class="material-icons">close</i>
                              <div class="ripple-container"></div>
                            </button>
                          </a>
                          <form action="{{ route('standard.destroy', $s->id) }}" method="post">
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