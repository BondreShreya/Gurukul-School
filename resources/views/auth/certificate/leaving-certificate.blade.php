<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</head>
<body>
<div id="DivToPrint">
  <table class="table" style="border:2px solid black;width: 100%;">
    <thead>
      <tr>
        <td style="border-bottom:1px solid red;text-align: center;padding:25px;font-size: 22px;"colspan="3">
          <span style="color:#0d008a">SUKHASHA EDUCATION AND MULTIPURPOSE SOCIETY, NAGPURE
          </span><br>
          <span style="color:red;font-size:20px"><b>GURUKUL INDIAN OLYMPIAD SCHOOL OF SCHOLOR</b></span>
          <br>
          <span style="color:#0d008a">NAVIN NAGAR, BHAWANI NAGAR, PARDI,<br>NAGPURE - 44003(MAHARASHTRA)</span>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size:21px;padding:30px;"colspan="3">
          <p style="text-align: center;"><b style="border:1px solid black;color:red; padding: 10px 50px 10px 50px;border-radius: 20px;">SCHOOL LEAVING CERTIFICATE</b></p>
          <p>Student ID No:<b>&nbsp;{{$name->serial_id}}</b><br>
          Student UID No:<b>&nbsp;{{$school->udise_no}}</b></p><br>
          <ol style="font-size:21px;">
            <li>Full Name Of Student :<b>&nbsp;{{$name->first_name}} &nbsp; {{$name->middle_name}} &nbsp; {{$name->last_name}}</b></li>
            <li>Mother Name :<b>&nbsp;{{$name->mother_name}}</b></li>
            <li>Nationality :<b>&nbsp;</b></li>
            <li>Religion : <b>&nbsp;{{$name->religion}}</b></li>
            <li>Caste :<b>&nbsp;{{$name->cast}}</b></li>
            <li>Place Of Birth :<b>&nbsp;{{$name->place_of_birth}}</b></li>
            <li>State :<b>&nbsp;</b></li>
            <li>Date Of Birth :<b>&nbsp;{{$name->date_of_birth}}</b></li>
            <li>Last School Attened And Class: <b>&nbsp;{{$name->previous_school}}&nbsp;&nbsp;{{$name->previous_class_name}}</b></li>
            <li>Date Of Admission :<b>&nbsp;{{$name->admission_date}}</b></li>
            <li>Progress:</li>
            <li>Date Of Leaving School : <b>&nbsp;{{$name->date_of_leaving}}</b></li>
            <li>Resion Of Leaving School :</li>
            <li>Remarks :</li>
          </ol>
          <p>Date:</p>
          <p style="text-align:center;"><b>Certifide that the above information is in according with the school register.</b></p>    
        </td>
      </tr>
      <tr style="font-size:21px;padding:30px;">
        <td style="width:33%"><p><b>Class Teacher :&nbsp;{{$teacher->name}}</b></p></td>
        <td style="width:33%"><p style="text-align:center;"><b>Clerk :</b><p></td>
        <td style="width:33%"><p style="text-align:right;"><b>Principal :</b><p> </td>
      </tr>
      <tr>
        <td style="font-size: 21px;"colspan="3">
          <p><b>Note :</b> Any Unauthorized changes made in school leaving certificate except school authority shall leads to legal action on that person.</p>
        </td>
      </tr>
    </tbody>
  </table>
</div><br>
<div style="text-align:center;">
  <button  type="button" id="btn" value="Print" onclick="printDiv();" style="padding:10px;background-color: #1a73e8;
    color: white;
    border-radius: 5px;">PRINT</button>
  </div>
<script>
function printDiv()
{
  var divToPrint=document.getElementById('DivToPrint');
  var newWin=window.open('','Print-Window');
  newWin.document.open();
  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>')
  newWin.document.close();
  setTimeout(function(){newWin.close();},10);
}
</script>
</body>
</html>
