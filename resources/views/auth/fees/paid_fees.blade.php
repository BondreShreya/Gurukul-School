@extends('layout.mainlayout')
@section('pagetitle','ALL PAID FEES LIST')
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
            <h4 class="card-title ">STUDENTS</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    SLIP ID
                  </th>
                  <th>
                    NAME
                  </th>
                   <th>
                   CLASS
                  </th>
                  <th>
                    SECTION
                  </th>
                  <th>
                    PAYABLE DATE
                  </th>
                   <th>
                   GRAND TOTAL
                   </th>
                  <th>
                    ACTION
                  </th>
                </thead>
                 <tbody>
                    <tr>
                      <td>
                        
                      </td>
                      <td>
                  
                      </td>
                      <td>
                        
                      </td>
                      <td>
                
                      </td>
                      <td>
                      
                      </td>
                      <td>
                        
                      </td>
                      <td>
                        
                      </td>
                      <td>
                        
                      </td>
                      <td>
                        
                      </td>
                    </tr>
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