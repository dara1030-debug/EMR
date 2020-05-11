@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
  <h1>CONTACT INFORMATION</h1>
  <h5><em>Click on the boxes below:</em></h5>
</div>

<!-- Three columns -->
<div class="row">
  <div class="column w3-padding-64 w3-opacity w3-hover-opacity-off" onclick="openTab('b1');" style="background: linear-gradient(#AED6F1,#3498DB);">
    CLINIC CONTACT INFORMATION
  </div>
  <div class="column w3-padding-64 w3-opacity w3-hover-opacity-off" onclick="openTab('b2');" style="background: linear-gradient(#AED6F1,#3498DB);">
    DEVELOPERS CONTACT INFORMATION
  </div>
</div>

<!-- Full-width columns: (hidden by default) -->
<br><br>
<div id="b1" class="containerTab" style="display:none;background:#273746 ;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h1><center>CLINIC CONTACT INFORMATION</center></h1>
  <br>

  <div class="row">
  <div class="column" style="background-color:#273746;">
  <h4 style="text-align:left;">MSU-ILIGAN INSTITUTE OF TECHNOLOGY</h4>
  <p style="text-align:left;"><small>Website: www.msuiit.edu.ph</small></p>
  <p style="text-align:left;"><small>Telephone # +63 (063) 221-4056</small></p>
  </div>
  <div class="column" style="background-color:#273746;">
  <h4 style="text-align:left;">INSTITUTE CLINIC</h4>
  <p style="text-align:left;"><small>Telephone # 4444 (local)</small></p>
  </div>
</div>

<div class="row">
  <div class="column" style="background-color:#273746;">
  <h4 style="text-align:left;">REGISTRAR</h4>
  <p style="text-align:left;"><small>Email address: registrar@g.msuiit.edu.ph</small></p>
  <p style="text-align:left;"><small>Telephone # +63 (063) 223 3794</small></p>
  </div>
  <div class="column" style="background-color:#273746;">
  <h4 style="text-align:left;">ADMISSIONS</h4>
  <p style="text-align:left;"><small>Email address: admissions@g.msuiit.edu.ph</small></p>
  <p style="text-align:left;"><small>Telephone # +63 (063) 223 8641</small></p>
  </div>
</div>

  </div>


<div id="b2" class="containerTab" style="display:none;background:#273746 ;">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <h1><center>DEVELOPERS CONTACT INFORMATION<center></h1>
  <br>
   
  <div class="row">
  <div class="column" style="background-color:#273746;">
  <h2>Anne Hayathi S. Albiso</h2>   
  <hr style="width:100%;text-align:left;margin-left:0">                                         
        <p class="title"><small><em>EMR System Developer</em></small></p>
        <p style="text-align:left;"><small>Course: BS Information Technology - Multimedia</small></p>
        <p style="text-align:left;"><small>E-mail Address: annehayathi1@gmail.com</small></p>
        <p style="text-align:left;"><small>Phone Number: 0915-565-0790 / 0927-549-0750</small></p>
        <p style="text-align:left;"><small>facebook link: https://www.facebook.com/anneyourlife.anneong</small></p>
  </div>

  <div class="column" style="background-color:#273746;">
  <h2>Isnaina U. Abdulazis</h2>
  <hr style="width:100%;text-align:left;margin-left:0">
        <p class="title"><small><em>EMR System Developer</em></small></p>
        <p style="text-align:left;"><small>Course: BS Information Technology - Multimedia</small></p>
        <p style="text-align:left;"><small>E-mail Address: isnainaabdulazis@gmail.com</small></p>
        <p style="text-align:left;"><small>Phone Number: 0910-041-1645 / 0927-499-3905</small></p>
        <p style="text-align:left;"><small>facebook link: https://www.facebook.com/ISNIE05</small></p>
  </div>
</div>

  </div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}
</script>

</body>
</html> 

@stop