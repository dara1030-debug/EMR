@extends('layouts.app')


@section('content')

<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/patients">Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/patients/create">Add New Patient</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
        <div class="container register"  style="margin-left: 12%">
            <div class="row">
                    <div class="tab-content" id="myTabContent" >
                        <br>
                            <div class="row register-form" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="ID Number *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Middle Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Home Address *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Present Address *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden"  selected disabled>Civil Status</option>
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widowed</option>
                                            <option>Separated</option>
                                            <option>In certain cases</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span> 
                                            </label>
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span> 
                                            </label>
                                        </div>
                                    </div>
                                        <select class="form-control">
                                            <option class="hidden"  selected disabled>College/Department</option>
                                            <option>OPD/DEPENDENT</option>
                                            <option>SCHOOL OF GRADUATE STUDIES</option>
                                            <option>COLLEGE OF EDUCATION</option>
                                            <option>COLLEGE OF NURSING</option>
                                            <option>CSM GRADUATE PROGRAMS</option>
                                            <option>COLLEGE OF BUSINESS ADMINISTRATION AND ACCOUNTANCY</option>
                                            <option>COLLEGE OF SCIENCE AND MATHEMATICS</option>
                                            <option>COLLEGE OF ARTS AND SOCIAL SCIENCE</option>
                                            <option>SCHOOL OF ENGINEERING TECHNOLOGY</option>
                                            <option>COLLEGE OF ENGINEERING AND TECHNOLOGY</option>
                                            <option>COLLEGE OF COMPUTER STUDIES</option>
                                            <option>ACCOUNTING SECTION</option>
                                            <option>ADMISSION OFFICE</option>
                                            <option>BUDGET OFFICE</option>
                                            <option>CASHIERING SECTION</option>
                                            <option>CULTURAL DEVELOPMENT OFFICE</option>
                                            <option>DEPARTMENT OF STUDENTS AFFAIRS</option>
                                            <option>DEPARTMENT OF TECHNOLOGY APPLICATION AND PROMOTION</option>
                                            <option>GUIDANCE OFFICE</option>
                                            <option>HUMAN RESOURCE MNGT. DIVISION</option>
                                            <option>ICTC-COMPUTER FACILITIES ANS SUPPORT SERVICES/option>
                                            <option>INSTITUTE LIBRARY</option>
                                            <option>INSTITUTE SECRETARY</option>
                                            <option>INTEGRATED DEVELOPMENTAL SCHOOL</option>
                                            <option>INTERNAL AUDIT SERVICES UNIT</option>
                                            <option>MANILA INFORMATION AND LIAISON OFFICE</option>
                                            <option>MEDICAL SERVICES</option>
                                            <option>MSU-IIT CENTER FOR eLEARNING</option>
                                            <option>NSTP UNIT</option>
                                            <option>OFFICE FOR ALUMNI RELATIONS AND REPLACEMENT</option>
                                            <option>OFFICE OF THE BAC SECRETARIAT</option>
                                            <option>OFFICE OF THE CHANCELLOR</option>
                                            <option>OFFICE OF THE VICE CHANCELLOR</option>
                                            <option>OFFICE OF THE VICE CHANCELLOR FOR ADMINISTRATION AND FINANCE</option>
                                            <option>OFFICE OF THE VICE CHANCELLOR FOR PLANNING AND DEVELOPMENT</option>
                                            <option>OFFICE OF THE VICE CHANCELLOR FOR RESEARCH AND EXTENSION</option>
                                            <option>PHYSICAL PLANT DIVISION</option>
                                            <option>PROPERTY AND SUPPLY OFFICE</option>
                                            <option>PURCHASING OFFICE</option>
                                            <option>REGISTRAR OFFICE</option>
                                            <option>SPORTS DEVELOPMENT OFFICE</option>
                                            <option>N/A</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Phone Number *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Age *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control" placeholder="Birth Date *" value="" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option class="hidden"  selected disabled>Role</option>
                                            <option>Student</option>
                                            <option>Faculty</option>
                                            <option>Staff</option>
                                            <option>OPD/Dependent</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                       
                        <div class="container register"> <br>             
                            <h3 class="register-heading text-left">A. PAST MEDICAL HISTORY</h3><br>
                            <div class="row">
                                <div class="col text-left">
                                    <form action="">
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Allergies<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Amoebiasis<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Anemia<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Arthritis<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Back and Joints Pains<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Bone Fracture<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Breast mass/lump<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Chest Pains<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Chicken Pox<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Diabetes Mellitus<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Epilepsy<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Eye or Ear Problem<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Gallbladder Stone<br>
                                </div>
                                <div class="col text-left">
                                    <form action="">
                                    <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Goiter<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Gout<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Hemorrhoids<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Hepatitis: A/B/C<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Hyperacidity/Ulcer<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Hypertension<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Kidney/Bladder Stones<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Loss of Conciousness<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Measles<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Mumps<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Pneumonia<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Prostate Problems<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Seizure<br>
                                </div>
                                <div class="col text-left">
                                    <form action="">
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Sinusitis/Allergic rhinitis<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Skin Disorders<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> STI/HIV<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Stroke<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Surgery/Injury<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Thyroid Problems<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Tonsillitis<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Tuberculosis<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> UTI<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Others: 
                                        <input style= "margin-left: 2%" type="text" name="" value="">
                                        <br><br>    
                                </div>
                                    <div class="w-100"></div>
                             </div>
                       
                        
                            <b><br>For Women: Last Menstrual Period(LMP) </b><input type="date" name="" value=""><br>
                            <h6><b>Menstrual Pattern:</b><h6>
                            <td><input style="margin-left: 2%" type="checkbox" name="name1" />Regular &nbsp;
                                <input type="checkbox" name="name2" />Irregular &nbsp;</td>
                            <br>
                    
                        </div> 
                        
                        <br><h3 class="register-heading text-left">B. FAMILY HISTORY</h3><br>
                            <div class="row">
                                    <div class="col text-left">
                                                <form action=""><p>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> High Blood Pressure<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Tuberculosis<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Heart Disease<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Asthma<br>
                                            <br>
                                    </div>
                                    <div class="col text-left">
                                        <form action=""><p>
                                        
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Diabetes<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Allergies<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Cancer<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Other:
                                        <input style= "margin-left: 2%" type="text" name="" value="">
                                        <br>
                                    </div>
                        </div>
                            
                        <h3 class="register-heading text-left">C. SOCIAL HISTORY</h3><br>
                             <div class="row">
                                <div class="col text-left">
                                    <form action="">
                                    <h6>  1. Do you Smoke? 
                                    <td><input type="checkbox" name="name1" />No &nbsp;
                                        <input type="checkbox" name="name2" />Yes &nbsp;</td>
                                    <h6>     If yes, how many packs?</h6><input style="margin: 2%" type="text" name="" value="">
                                    <h6>  2. Do you drink alcohol (beer/liquer)? 
                                    <td><input type="checkbox" name="name1" />No &nbsp;
                                        <input type="checkbox" name="name2" />Yes &nbsp;</td>
                                    <h6>     If yes, how frequent? Occasional or Seldom</h6><input style="margin: 2%" type="text" name="" value="">
                                    

                                </div>   
                                <div class="col text-left">
                                    <form action="">
                                   <h6>  2. Do you take medication at present? 
                                    <td><input type="checkbox" name="name1" />No &nbsp;
                                        <input type="checkbox" name="name2" />Yes &nbsp;</td>
                                    <h6>     If yes, please indicate below 
                                    </h6><input style="margin: 2%" type="text" name="" value="">
                                    <input style="margin: 2%" type="text" name="" value=""><br>
                                    <br>
                                </div> 
                                    
                             </div> 

                             <br><br><h3 class="register-heading text-left">D. PHYSICAL EXAMINATION</h3>
                             <div class="row">
                                <div class="col text-left">
                                     <form action="">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Normal </th>
                                                <th>Abnormal</th>
                                                <th> Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Skin</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Head/Neck/Scalp</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Eyes</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Ears/Nose/Throat</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Nose/Sinuses</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Mouth, Throat</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Neck, LN, Thyroid</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Chest-Breast-Axilla</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Lungs</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Heart</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Abdomen</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Back, Flank</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Anus-rectum</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>GU system</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Inguinals, Genitals</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Reflexes</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Extremities</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Neurologic</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Endocrine</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="checkbox" name="history" value=""></td>
                                                <td><input type="text" name="" value="" style="margin-bottom: 5%"></td>
                                            </tr>
                                            <br>
                                            
                                        </tbody>
                                    </table>               

                                </div>
                             </div>

                             <br><br><h3 class="register-heading text-left">E. VITAL SIGNS</h3>
                             <div class="row">
                                <div class="col text-left">
                                        <form action="">
                                        <tr> <br>
                                        <td><p>T:  <input style="margin: 2%" type="text" name="" value="">°C<br> 
                                        <td> PR:<input style="margin: 2%" type="text" name="" value="">bpm<br> 
                                        <td> RR:<input style="margin: 2%" type="text" name="" value="">bpm<br>
                                         </tr>

                                </div>
                                <div class="col text-left">
                                    <form action="">
                                    <tr> <br>
                                     <td>BP:<input style="margin: 2%" type="text" name="" value="">mmhg<br>
                                    <td>WT:<input style="margin: 2%" type="text" name="" value="">kg</p>
                                    </tr>

                                 </div>
                            </div>

                            <br><br><h3 class="register-heading text-left">F. NURSING INVENTIONS</h3><br>
                             <div class="row">
                                <div class="col text-left">
                                    <form action="">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Time:</th>
                                                <th>By:</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><input style="margin: 2%" type="text" name="" value=""></td>
                                                <td><input type="time" name="" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 2%" type="text" name="" value=""></td>
                                                <td><input type="time" name="" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 2%" type="text" name="" value=""></td>
                                                <td><input type="time" name="" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 2%" type="text" name="" value=""></td>
                                                <td><input type="time" name="" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 2%" type="text" name="" value=""></td>
                                                <td><input type="time" name="" value=""></td>
                                                <td><input type="text" name="" value=""></td>
                                            </tr>
                                            </tbody>
                                        </table><br>
                                </div>
                            </div>

                            <br><h3 class="register-heading text-left">H. ASSESSMENT AND RECOMMENDATIONS</h3>
                             <div class="row">
                                <div class="col text-left">
                                    <form action="">
                                    <h6> <h6>
                                    <td><input style="margin-left: 2%" type="checkbox" name="name1" />Physically Fit &nbsp;
                                        <input type="checkbox" name="name2" />Not Physically Fit &nbsp;</td><br>

                                        <input style="padding: 10%" type="text" name="" value=""><br>
                                        Date of Examination: <input type="date" name="" value="">
                                       
                                </div>

                                <div class="col text-left">
                                    <form action="">
                                    
                                        <b>MEDICAL EXAMINER</b>
                                        <p>By:<input type="text" name="" value=""><br>
                                        Licence No.<input type="number" name="" value=""></p>    
                                </div>
                            </div>
                            
                    
                            <br><br><button style="postion: center" type ="button" class = "btn btn-info">Register</button>
                        <br><br><br>
                        </div>
                </div>
                
                        
            </div>    
                     
        </div>  

    </div>

       
     
</div>
    
                        
@stop