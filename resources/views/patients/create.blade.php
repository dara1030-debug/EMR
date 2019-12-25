@extends('layouts.app')
<div style='background-color: #FBD1B7'>

@section('content')
    <div class="container register"  style="margin-left: 17%">
                <div class="row">
                        <div class="tab-content" id="myTabContent" >
                                <h3 class="register-heading">Add Patient</h3>
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
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
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
                                                <option class="hidden"  selected disabled>Civil Status</option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Separated</option>
                                                <option>In certain cases</option>
                                            </select>
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
                                        <button type ="button" class = "btn btn-info">Register</button>
                                    </div>
                                </div>
                            </div>
                           
                           
                         <div class="container register"> <br>             
                            <h3 class="register-heading">A. PAST MEDICAL HISTORY</h3>
                             <div class="col-md-6">
                                <div class="column">
                                    <div class="card">
                            <form action="">
                            <input type="checkbox" name="history" value=""> Allergies<br>
                            <input type="checkbox" name="history" value=""> Amoebiasis<br>
                            <input type="checkbox" name="history" value=""> Anemia<br>
                            <input type="checkbox" name="history" value=""> Arthritis<br>
                            <input type="checkbox" name="history" value=""> Back and Joints Pains<br>
                            <input type="checkbox" name="history" value=""> Bone Fracture<br>
                            <input type="checkbox" name="history" value=""> Breast mass/lump<br>
                            <input type="checkbox" name="history" value=""> Chest Pains<br>
                            <input type="checkbox" name="history" value=""> Chicken Pox<br>
                            <input type="checkbox" name="history" value=""> Diabetes Mellitus<br>
                            <input type="checkbox" name="history" value=""> Epilepsy<br>
                            <input type="checkbox" name="history" value=""> Eye or Ear Problem<br>
                            <input type="checkbox" name="history" value=""> Gallbladder Stone<br>
                            <input type="checkbox" name="history" value=""> Goiter<br>
                            <input type="checkbox" name="history" value=""> Gout<br>
                            <input type="checkbox" name="history" value=""> Hemorrhoids<br>
                            <input type="checkbox" name="history" value=""> Hepatitis: A/B/C<br>
                            <input type="checkbox" name="history" value=""> Hyperacidity/Ulcer<br>
                            <input type="checkbox" name="history" value=""> Hypertension<br>
                            <input type="checkbox" name="history" value=""> Kidney/Bladder Stones<br>
                            <input type="checkbox" name="history" value=""> Loss of Conciousness<br>
                            <input type="checkbox" name="history" value=""> Measles<br>
                            <input type="checkbox" name="history" value=""> Mumps<br>
                            <input type="checkbox" name="history" value=""> Pneumonia<br>
                            <input type="checkbox" name="history" value=""> Prostate Problems<br>
                            <input type="checkbox" name="history" value=""> Seizure<br>
                            <input type="checkbox" name="history" value=""> Sinusitis/Allergic rhinitis<br>
                            <input type="checkbox" name="history" value=""> Skin Disorders<br>
                            <input type="checkbox" name="history" value=""> STI/HIV<br>
                            <input type="checkbox" name="history" value=""> Stroke<br>
                            <input type="checkbox" name="history" value=""> Surgery/Injury<br>
                            <input type="checkbox" name="history" value=""> Thyroid Problems<br>
                            <input type="checkbox" name="history" value=""> Tonsillitis<br>
                            <input type="checkbox" name="history" value=""> Tuberculosis<br>
                            <input type="checkbox" name="history" value=""> UTI<br>
                            <input type="checkbox" name="history" value=""> Others: 
                            <input type="text" name="" value="">
                            <br>
                    </div>        
                </div>  
             </div>
         </div>



                          <div class="container register"> <br>             
                            <h3 class="register-heading">B. FAMILY HISTORY</h3>
                             <div class="col-md-6">
                                <div class="column">
                                    <div class="card">
                            <form action="">
                            <input type="checkbox" name="history" value=""> High Blood Pressure<br>
                            <input type="checkbox" name="history" value=""> Tuberculosis<br>
                            <input type="checkbox" name="history" value=""> Heart Disease<br>
                            <input type="checkbox" name="history" value=""> Asthma<br>
                            <input type="checkbox" name="history" value=""> Diabetes<br>
                            <input type="checkbox" name="history" value=""> Allergies<br>
                            <input type="checkbox" name="history" value=""> Cancer<br>
                            <input type="checkbox" name="history" value=""> Other:
                            <input type="text" name="" value="">
                            <br>

                        </div>
                    </div>
                </div>
            </div>    

                            <div class="container register" > <br>             
                            <h3 class="register-heading">C. SOCIAL HISTORY</h3>
                             <div class="col-md-6">
                                <div class="column">
                                    <div class="card">
                            <form action="">
                            <h6>  1. Do you Smoke? 
                            <td><input type="checkbox" name="name1" />No &nbsp;
                                <input type="checkbox" name="name2" />Yes &nbsp;</td>
                            <h6>     If yes, how many packs?</h6><input type="text" name="" value=""><br>
                            <h6>  2. Do you drink alcohol (beer/liquer)? 
                            <td><input type="checkbox" name="name1" />No &nbsp;
                                <input type="checkbox" name="name2" />Yes &nbsp;</td>
                            <h6>     If yes, how frequent? Occasional or Seldom</h6><input type="text" name="" value=""><br>
                            <h6>  2. Do you take medication at present? 
                            <td><input type="checkbox" name="name1" />No &nbsp;
                                <input type="checkbox" name="name2" />Yes &nbsp;</td>
                            <h6>     If yes, please indicate below 
                            </h6><input type="text" name="" value="">
                            <input type="text" name="" value="">
                            <input type="text" name="" value=""><br>

                    </div>        
             </div>  
     </div>
 
                        <div class="container register"> <br>             
                            <h3 class="register-heading">D. PHYSICAL EXAMINATION</h3>
                             <div class="col-md-6">
                                <div class="column">
                                    <div class="card">
                            <form action="">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Normal /</th>
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
                                        <td><input type="text" name="" value=""></td>
                                    </tr>
                                    <br>
                                </tbody>
                            </table>               


                                </div>
                            </div>
                        </div>
                    </div>


                           
                            <br><input type="submit" value="Submit">
                            </form>
                            
                            </div>
                            </div>
                            
                        </div>
                    </div>
                
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@stop