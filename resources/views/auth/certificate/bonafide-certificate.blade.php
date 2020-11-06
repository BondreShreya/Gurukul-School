<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <style>
   
  </style>
</head>
<body>

<div id="DivToPrint">
  <table class="table" style="border:2px solid black;width: 100%;">
    <thead>
      <tr>
        <td style="border-bottom:1px solid red;text-align: center;padding:30px;font-size:21px;">
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
        <td style="font-size:21px;padding:30px;">
          <p style="text-align:center"><b style="border:1px solid black;color:red; padding: 10px 50px 10px 50px;border-radius: 20px;">BONAFIDE CERTIFICATE</b></p><br>
          <p>Admission Register No:&nbsp;</p>
          <p style="text-align:justify">This is to Certify that &nbsp;<b>{{$name->first_name}}&nbsp; {{$name->middle_name}}&nbsp; {{$name->last_name}}</b> &nbsp;is bonafide student of this School/college. He/She is/was studying in Std.&nbsp;<b>{{$std->standard}}</b>&nbsp;in the year.His/Her Date of Birth According to School/College Admission Register is<b>&nbsp;{{$name->admission_date}}</b>.</p>
          <p>He is belong to &nbsp;<b>{{$name->cast}}</b>&nbsp; Cast.</p>
          <p>Nagpure.</p><br>
          <p>Date:</p>
          <p style="text-align: right;"><b>Head Master/Head Mistress/Principal</b></p>
            
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
