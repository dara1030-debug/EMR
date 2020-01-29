@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
    @endif


    <div class="card text-center">
            <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="one-tab" data-toggle="tab" href="#labone" role="tab" aria-controls="One" aria-selected="true">Lab Report Urinalysis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#labtwo" role="tab" aria-controls="Two" aria-selected="false">Lab Report Hematology Sec</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#labthree" role="tab" aria-controls="Three" aria-selected="false">Lab Report Blood Chem</a>
                </li>
            </ul>
            </div>
        <div class="card-body">
            <div class="container register"  style="margin-left: 7%">
                <div class="row">
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="labone" role="tabpanel" aria-labelledby="one-tab">
                            <div class="row">
                                <div class="col text-center">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade p-3" id="labtwo" role="tabpanel" aria-labelledby="two-tab">
                            <center><h2 class="register-heading text-center">LABORATORY REPORT</h2></center>
                                        <h5><center> HEMATOLOGY SECTION </center></h5>
                                        <br><br>
                            <div class="row">
                                    <div class="col">
                                        <p align="left"><small>Lab ID#      :LR19090001</small></p> 
                                        <p align="left"><small>Patient Name :</small></p>
                                        <p align="left"><small>Age          :</small></p>
                                        <p align="left"><small>Sex          :</small></p>
                                    </div>
                                    <div class="col text-left">
                                        <form action="/action_page.php" method="get" align="left"><small>
                                        Requesting MD: </small><input type="text" name=""><br><small>
                                        Date Requested: </small><input type="date" name="" size="10"><br><small>
                                        Date Reported: </small><input type="date" name="" size="10"><small>
                                        Time Reported: </small><input type="time" name="" size="10">
                                        </form>
                                        <br><br><br><br>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                            <table class="table table-bordered">
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
                        
                                    </div>
                                </div>
                            </div>             
            
                        <div class="tab-pane fade p-3" id="labthree" role="tabpanel" aria-labelledby="three-tab">
                            <center><h2 class="register-heading text-center">LABORATORY REPORT</h2></center>
                                        <h5><center> BLOOD CHEMISTRY</center></h5> 
                                        <br><br>
                            <div class="row">
                                <div class="col">
                                    

                                    <p align="left"><small>Lab ID#      :LR19060018</small></p> 
                                    <p align="left"><small>Patient Name :</small></p>
                                    <p align="left"><small>Age          :</small></p>
                                    <p align="left"><small>Sex          :</small></p>
                                </div>
                                <div class="col text-left">
                                    <form action="/action_page.php" method="get" align="left"><small>
                                        Requesting MD: </small><input type="text" name=""><br><small>
                                        Date Requested: </small><input type="date" name="" size="10"><br><small>
                                        Date Reported: </small><input type="date" name="" size="10"><small>
                                        Time Reported: </small><input type="time" name="" size="10">
                                        <br><br><br><br>
                                    </form>
                                </div>
                            </div>
                            <div class="row">

                                        <table class=" table table-bordered">
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
                                            <td><small><align="right">5.3 mg/dL></small></td>
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
                                        </table>
                                    </form>
                                    <form action="{{ route('users.store') }}" method="post">
                                        @csrf
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
        
@stop