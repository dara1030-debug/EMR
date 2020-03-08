@extends('layouts.app')

@section('content')
<div class="card text-left">
    <div class="card-header">
    
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2><center>"About the Developers"</center></h2>
<p><center>We are the developer of the EMR System for MSU-IIT Clinic</center></p>
<br>

<div class="row">
  <div class="col-md-6">
    <div class="card">
    <img src="img/2x2a.jpg" alt="image" class="center" style="width:300px;height:300px;" >
      <div class="container">
        <h2>Anne Hayathi S. Albiso</h2>
        <p class="title">EMR System Developer</p>
        <p>Course: BS Information Technology - Multimedia</p>
        <p>E-mail Address: annehayathi1@gmail.com</p>
        <p>Phone Number: 0915-565-0790 / 0927-549-0750</p>
        <p>facebook link: https://www.facebook.com/anneyourlife.anneong</p>
       
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card">
    <img src="img/2x2.jpg" alt="image" class="center" style="width:300px;height:300px;">
      <div class="container">
      <h2>Isnaina U. Abdulazis</h2>
        <p class="title">EMR System Developer</p>
        <p>Course: BS Information Technology - Multimedia</p>
        <p>E-mail Address: isnainaabdulazis@gmail.com</p>
        <p>Phone Number: 0910-041-1645 / 0927-499-3905</p>
        <p>facebook link: https://www.facebook.com/ISNIE05</p>
        
      </div>
    </div>
  </div>
  

</body>
</html>

  </div>
</div>
@stop