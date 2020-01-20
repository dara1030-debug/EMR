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
            <center><h2 class="register-heading">LABORATORY REPORT</h2></center>
            <center><h5> URINALYSIS <h5></center>

            <p align="left"><medium>Lab ID#      :LR16010013</medium></p> 
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
                    <th>RESULTS</th>
                    <th>MICROSCOPIC</th>
                    <th>RESULTS</th>
                    
                </tr>

                <tr>
                    <td><medium>COLOR</medium></td>
                    <td><medium>Yellow</medium></td>
                    <td><medium>PUS CELLS</medium></td>
                    <td><medium>1-4/HPF</medium></td>
                    
                </tr>

                <tr>
                    <td><medium>TRANSPARENCY</medium></td>
                    <td><medium>Turbid</medium></td>
                    <td><medium>RED BLOOD CELL</medium></td>
                    <td><medium>0-2/HPF</medium></td>
                    
                </tr>

                <tr>
                    <td><medium>REACTION (pH)</medium></td>
                    <td><medium>6.0</medium></td>
                    <td><medium>BACTERIA</medium></td>
                    <td><medium>Abundant</medium></td>
                    
                </tr>

                <tr>
                    <td><medium>SPECIFIC GRAVITY</medium></td>
                    <td><medium>1.020</medium></td>
                    <td><medium>EPITHELIAL CELLS</medium></td>
                    <td><medium>Few</medium></td>
                    
                </tr>

                <tr>
                    <td><medium>SUGAR</medium></td>
                    <td><medium>Negative</medium></td>
                    <td><medium>CRYSTALS</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    
                </tr>

                <tr>
                    <td><medium>PROTEIN</medium></td>
                    <td><medium>Negative</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    
                </tr>

                <tr>
                    <td><medium>SPECIAL TESTS</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium>CAST</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    
                </tr>


                <tr>
                    <td><medium>BILE</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                   
                </tr>

                <tr>
                    <td><medium>UROBILINOGEN</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium>OTHERS</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                   
                </tr>

                <tr>
                    <td><medium>KETONE</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                   
                </tr>

                <tr>
                    <td><medium>BLOOD</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                   
                </tr>

                <tr>
                    <td><medium>LEUKOCYTES ESTERASE</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium>PREGNANCY TEST</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                   
                </tr>

                <tr>
                    <td><medium>NITRITES</medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                    <td><medium><input type="text" name=""></medium></td>
                   
                </tr>

                
                </table>

                <br><br><br><br>
 

                <div class="">
                <div class="">
                     <ul class="nav nav-tabs card-header-tabs">
           
                     </ul>
                 </div>

        <div class="card-body">
        <center><h2 class="register-heading">LABORATORY REPORT</h2></center>
            <h5><center> HEMATOLOGY SECTION </center><h5>

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
                    <td><small>Eosinophils</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>0.0-0.05</small></td>
                    <td><small>% Activity</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Monocytes</small></td>
                    <td><small>0.00</small></td>
                    <td><small>0.0-0.07</small></td>
                    <td><small>INR</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Basophils</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>0.0</small></td>
                    <td><small>Control Value</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Stabs</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>0.0-0.05</small></td>
                    <td><small>Partial Thromboplastin Time</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Platelet Count</small></td>
                    <td><small>150</small></td>
                    <td><small>150-400 X 10L</small></td>
                    <td><small>Test Value</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Reticulocyte Count</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small>5-15X10</small></td>
                    <td><small>Control Value</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                
                </table>
 

                <br><br><br><br>

                <div class="">
                <div class="">
                     <ul class="nav nav-tabs card-header-tabs">
           
                     </ul>
                 </div>
        
        <div class="card-body">
            <center><h2 class="register-heading">LABORATORY REPORT</h2></center>
            <center><h5> BLOOD CHEMISTRY <h5></center>

            <p align="left"><small>Lab ID#      :LR19060018</small></p> 
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
                    <th>EXAMINATIONS</th>
                    <th>RESULTS</th>
                    <th>NORMAL VALUES</th>
                    <th>EXAMINATIONS</th>
                    <th>RESULTS</th>
                    <th>NORMAL VALUES</th>
                </tr>

                <tr>
                    <td><small>Blood Uric Acid</small></td>
                    <td><small><right>5.3 mg/dL</right></small></td>
                    <td><small><center>F2.6-6.0 M3.5-7</center></small></td>
                    <td><small>Lactic Dehydrogenase</small></td>
                    <td><small>check</small></td>
                    <td><input type="text" name="" size="10"><small>.0-20mm/hr 0-10m/hr</small></td>
                    
                </tr>

                <tr>
                    <td><small>Blood Urea Nitrogen</small></td>
                    <td><small>15 mg/dL</small></td>
                    <td><small>15-24</small></td>
                    <td><small>Creatinine-Kinase (CPK)</small></td>
                    <td><small>check</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>Cholesterol</small></td>
                    <td><small>271 mg/dL</small></td>
                    <td><small>check</small></td>
                    <td><small>CK-MB</small></td>
                    <td><small>check</small></td>
                    <td><small>0-24</small></td>
                </tr>

                <tr>
                    <td><small>Triglycerides</small></td>
                    <td><small>151 mg/dL</small></td>
                    <td><small>check</small></td>
                    <td><small>Total Bilirubin</small></td>
                    <td><small>check</small></td>
                    <td><small>UP To 1.10</small></td>
                </tr>

                <tr>
                    <td><small>HDL-Cholesterol</small></td>
                    <td><small>111 mg/dL</small></td>
                    <td><small>check</small></td>
                    <td><small>Indirect Bilirubin (B1)</small></td>
                    <td><small>check</small></td>
                    <td><small><input type="text" name="" size="10"></small></td>
                </tr>

                <tr>
                    <td><small>LDL-Cholesterol</small></td>
                    <td><small>129.8 mg/dL</small></td>
                    <td><small>check</small></td>
                    <td><small>Direect Bilirubin (B2)</small></td>
                    <td><small></small></td>
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