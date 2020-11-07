@extends('layout.mainlayout')
@section('pagetitle','ALL ALLOTMENT LIST')
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
            <h4 class="card-title ">ALLOTMENT LIST</h4>
          </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>ACTION</th>
                  <th>ID</th>
                  <th>STUDENT NAME</th>
                  <th>SCHOOL NAME</th>
                  <th>CLASS</th>
                  <th>SECTION</th>
                  <th>ACADAMIC YEAR</th>
                </thead>
                  <tbody>
                    @foreach($allotedStudent as $key => $a)
                      <?php 
                        $year=DB::table('student_profile')->where('id',$a->admission_id)->first();
                      ?> 
                      <?php 
                        $name=DB::table('school_profile')->where('id',$year->school_name)->first();
                      ?>
                      <?php 
                        $class=DB::table('standerd')->where('id',$year->class_name)->first();
                      ?>
                      <?php 
                        $sec=DB::table('section')->where('id',$year->section)->first();
                      ?>
                      <?php 
                       $acadamic=DB::table('acadamic_year')->where('id',$year->acadamic_year)->first();
                      ?> 
                        <tr>
                          <td><input type="checkbox" value="{{$a->admission_id}}" name="admission_id"></td>
                          <td>{{ ++$key }}</td>
                          <td>{{ $year->first_name}}  {{ $year->middle_name}}  {{ $year->last_name}}</td>
                          <td>{{ $name->school_name}}</td>
                          <td>{{ $class->standard}}</td>
                          <td>{{ $sec->section }}</td>
                          <td>{{ $acadamic->previous_acadamic_year}}-{{$acadamic->acadamic_year}}</td>
                        </tr>
                    @endforeach  
                  </tbody>
              </table>
              <button id="submitTable" class="btn btn-primary pull-right" >UPDATE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('customjs')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>   
<script>
  $.ajaxSetup({
 headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
});
</script>

<script>
$(document).on("click","#submitTable",function(){
  
   var allotment_id="{{ $allotment->id }}";
  
  

// using array 

   var admission=[];
   $("input[name='admission_id']:checked").each(function(){
   admission.push(this.value);    
    });
    // const obj = Object.assign({}, admission);

// using array 

// alert(allotment_id);
$.ajax({
url: "{{ route('allot.update') }}",
method:"POST",
data:{
  admission:admission,
  allotment_id:allotment_id},
success:function(data)
{
  if($.isEmptyObject(data.error))
  {
    console.log(data);
    setTimeout(() => {
    location.reload();
    }, 1000);
	}
}
});
});
</script>
@endsection