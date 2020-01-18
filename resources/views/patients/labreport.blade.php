@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="card text-center mb-5">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
           
          </ul>
        </div>
        
        <div class="card-body">
            <h2 class="register-heading">LABORATORY REPORT</h2>
            <h5> HEMATOLOGY SECTION <h5>

            <p align="left"><small>Lab ID#      :LR19090001</small></p> 
            <p align="left"><small>Patient Name :</small></p>
            <p align="left"><small>Age          :</small></p>
            <p align="left"><small>Sex          :</small></p>

            <form action="/action_page.php" method="get" align="left"><small>
             Requesting MD: </small><input type="text" name=""><br><small>
             Date Requested: </small><input type="date" name="" size="10"><br><small>
             Date Reported: </small><input type="date" name="" size="10"><small>
             Time Reported: </small><input type="time" name="" size="10">
             <br><br><br><br>

                <head>
                <style>
                table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                }

                td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }

                tr:nth-child(even) {
                background-color: ;
                }
                </style>
                </head>
                <body>
                <table>
                <tr>
                    <th></th>
                    <th>RESULT</th>
                    <th>NORMAL VALUE</th>
                    <th></th>
                    <th>RESULT</th>
                    <th>NORMAL VALUE</th>
                </tr>

                <tr>
                    <td><small>Hemoglobin</small></td>
                    <td><small>120</small></td>
                    <td><small>120-170 g/L</small></td>
                    <td><small>Sedimentation Rate</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>.0-20mm/hr 0-10m/hr</small></td>
                    
                </tr>

                <tr>
                    <td><small>Hematocrit</small></td>
                    <td><small>0.37</small></td>
                    <td><small>0.37-0.54</small></td>
                    <td><small>Malarial Smear</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>RBC</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>4.0-5x10L</small></td>
                    <td><small>Blood Type</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>WBC</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>4.5-10X10I</small></td>
                    <td><small>RH Type</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Differential Count</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>Bleeding time</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>1-3 min.</small></td>
                </tr>

                <tr>
                    <td><small>Neutrophils</small></td>
                    <td><small>0.50</small></td>
                    <td><small>0.50-0.70</small></td>
                    <td><small>Clotting Time</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>5-15min(Lee-White)</small></td>
                </tr>

                <tr>
                    <td><small>Lymphocytes</small></td>
                    <td><small>0.20</small></td>
                    <td><small>0.20-0.40</small></td>
                    <td><small>Prothombin Time: Time Value</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>
                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>

                <tr>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                    <td><small></small></td>
                </tr>
                </table>

                </body>
            </form>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
               
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop