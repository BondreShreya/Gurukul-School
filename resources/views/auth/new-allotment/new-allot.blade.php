@extends('layout.mainlayout')
@section('pagetitle','STUDENT ALLOTMENT')
@section('custom_styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
            <h4 class="card-title">NEW STUDENT ALLOTMENT</h4>
          </div>
          <div class="card-body">
            
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">CLASS</label>
                      <select  id="classs" class="form-control" name="class_name">
                        <option value="">-SEELECT CLASS-</option>
                        @foreach($std as $class)
                        <option value="{{ $class->id }}">{{ $class->standard }}</option>
                        @endforeach
                      </select>  
                      @error('class_name')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror 
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">SECTION</label>
                      <select name="section" id="section" class="form-control">
                        <option value="">- Select Section -</option>
                        @foreach($sec as $class)
                        <option value="{{ $class->id }}">{{ $class->section }}</option>
                        @endforeach
                      </select>
                      @error('section')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">ACADAMIC YEAR</label>
                      <select name="acadamic_year" id="academicYear" class="form-control">
                        <option value="">- ACADAMIC SESSION -</option>
                        @foreach($academicYear as $a)
                        <option value="{{ $a->id }}">{{$a->previous_acadamic_year}} - {{ $a->acadamic_year }}</option>
                        @endforeach
                      </select>
                      @error('acadamic_year')
                          <span class="text-danger" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror 
                  </div>
                </div>
              </div>
              <div id="searchDiv">
                <button  class="pull-right btn btn-primary mt-5" onclick="filterStudList();">SEARCH</button>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">STUDENTS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <h3 class="card-title mt-5 mb-5 text-primary">Promoted Student</h3>
                  <table class="table" id="example">
                    <thead class=" text-primary">
                      <th>Action</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Student Name</th>
                      <th>School Name</th>
                      <th>Acadamic Year</th>
                    </thead>
                      <tbody id="table1">
                      </tbody>
                  </table>
                  <button id="myform" class="btn btn-primary pull-right" >SAVE</button>
                  <h3 class="card-title mt-5 mb-5 text-primary">Non Promoted Student List</h3>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Action</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Student Name</th>
                      <th>School Name</th>
                      <th>Acadamic Year</th>
                    </thead>
                    <tbody id="">
                      </tbody>
                  </table>
                  <button type="submit" class=" pull-right btn btn-primary mt-5">SAVE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js
"></script> -->
<script type="text/javascript">
	function filterStudList() {
		var classs = $("#classs").val();
		var academicYear = $("#academicYear").val();
    var section = $("#section").val();

    // alert(section);
		$.ajax({
					type : "GET",
					url: "{{route('new-allote-search')}}",
					async : true,
					data : {"classs" : classs,
            "section" : section,
			"academicYear" : academicYear},
					success : function(response) {
            console.log(response);
					
						$('#example').append(response);
					}
				});
		// $("#searchDiv").css("display", "none");
		$("#example tr td").remove();
	}
</script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js
"></script>

<script>
  $.ajaxSetup({
 headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
});
</script>
<script>
$(document).on("click","#myform",function(){
   var course=$("#classs").val();
   var section=$("#section").val();
   var acadmic_year=$("#academicYear").val();
  //  alert(course);
   var token = $('meta[name="csrf-token"]').attr('content');
// using array 

   var admission=[];
   $("input[name='admission_id']:checked").each(function(){
   admission.push(this.value);    
    });
    // const obj = Object.assign({}, admission);

// using array 

// alert(admission);
$.ajax({
url: "{{ url('admin/alloted_list/store') }}",
method:"POST",
data:{_token:token,course:course,section:section,acadmic_year:acadmic_year, admission:admission},
success:function(data)
{
  if($.isEmptyObject(data.error)){
    console.log(data);
  
  setTimeout(() => {
    alert('record added successfully');
    location.reload();
    }, 1000);
	  }else{
	  	printErrorMsg(data.error);
	  }

    
  
                   

}
});
});
</script>
@endsection