@extends('layout.mainlayout')
@section('pagetitle','CLASS')
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
            <h4 class="card-title">ADD CLASS</h4>
          </div>
          <div class="card-body">
            <form action=" {{ route('class.store') }}" method="POST" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Standard</label>
                    <select name="standard" id="standard" class="form-control">
                      <option value="">- Select Standard -</option>
                      @foreach($std as $s)
                      <option value="{{ $s->standard }}">{{ $s->standard }}</option>
                      @endforeach
                    </select>
                      @error('standard')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Section</label>
                    <select name="section" id="section" class="form-control">
                    <option value="">- Select Section -</option>
                      @foreach($sec as $s)
                      <option value="{{ $s->section }}">{{ $s->section }}</option>
                      @endforeach
                    </select>
                    @error('section')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                </div>
                  <div class="row">
                    <div class="col-md-12">
                     <button type="submit" class="pull-right btn btn-primary">Add</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">CLASS LIST</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ID</th>
                  <th>CLASS</th>
                  <th>ACTION</th>
                </thead>
                 <tbody>
                    @foreach($student as $key=>$class)
                        <tr>
                          <td>
                          {{++$key}}
                          </td>
                          <td>{{$class->standard}}  {{ $class->section }}</td>
                          <td class="action">
                          <a href="{{ route('edit_class.edit', $class->id) }}">
                          <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit">
                                <i class="material-icons">edit</i>
                          </button>
                          </a>
                          <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="delete">
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" aria-describedby="tooltip680332">
                              <i class="material-icons">close</i>
                              <div class="ripple-container"></div>
                            </button>
                          </a>                       
                          <form action="{{ route('class.destroy', $class->id) }}" method="post">
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