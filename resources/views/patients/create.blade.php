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
        <li class="nav-item">
            <a class="nav-link" href="#">Archive</a>
          </li>
      </ul>
    </div>
    <div class="card-body">
        <img src="/img/Picture1.png" alt="create_avatar" class="create_avatar"><br>
        <input id="inp" type="file" accept="image/*"><br>
        
        <div class="container register"  style="margin-left: 3%">
            
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

                        <div class="container " >
                            <div class="row">
                                <div class="card mt-3 tab-card" >
                                  <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                      <li class="nav-item">
                                          <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Past Medical History</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Family History</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Social History</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false">Physical Examination</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#five" role="tab" aria-controls="Five" aria-selected="false">Vital Signs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#six" role="tab" aria-controls="Six" aria-selected="false">Nursing Intervention</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="Seven" aria-selected="false">Assessment</a>
                                    </li>
                                    </ul>
                                  </div>
                          
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
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
                                         </div> 
                                         <div class="row">
                                            <div class="col text-center">
                                               <b><br><br>For Women:<br> Last Menstrual Period(LMP) </b><br><input type="date" name="" value="">
                                           </div>
                                           <div class="col text-center">
                                               <h6><br><br><br><b>Menstrual Pattern:</b><h6>
                                                   <div class="form-check">
                                                       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                       <label class="form-check-label" for="exampleRadios1">
                                                         Regular
                                                       </label>
                                                     </div>
                                                     <div class="form-check">
                                                       <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                       <label class="form-check-label" for="exampleRadios2">
                                                         Irregular
                                                       </label>
                                                     </div>
                                            </div>
                                       </div>            
                                    </div>
                                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                        <div class="row">
                                            <div class="col text-left">
                                                <p>Do you have a close relative (parent/grandparents/siblings) who have been diagnosed of:</p>
                                                        <form action=""><p>
                                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> High Blood Pressure<br>
                                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Tuberculosis<br>
                                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Heart Disease<br>
                                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Asthma<br>
                                                    <br>
                                            </div>
                                            <div class="col text-left">
                                                <form action="">
                                                <br><br><br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Diabetes<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Allergies<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Cancer<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Other:
                                                <input style= "margin-left: 2%" type="text" name="" value="">
                                                <br>
                                            </div>
                                         </div>             
                                    </div>
                                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="row">
                                            <div class="col text-left" style= "margin-left: 14%">
                                                <form action="">
                                                <h6>  1. Do you Smoke? 
                                                    <div class="form-check">
                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1" id="choice1" value="option1" checked>
                                                        <label style= "margin-left: 9%"class="form-check-label" for="choice1" >
                                                          No
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1" id="choice2" value="option2">
                                                        <label style= "margin-left: 9%" class="form-check-label" for="choice2">
                                                          Yes
                                                        </label>
                                                      </div>
                                                <h6>     If yes, how many packs?</h6><input style="margin: 2%" type="number" name="" value="">
                                                <h6> <br> 2. Do you drink alcohol (beer/liquer)? 
                                                    <div class="form-check">
                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1a" id="choice1a" value="option1" checked>
                                                        <label style= "margin-left: 9%"class="form-check-label" for="choice1a">
                                                          No
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1a" id="choice2a" value="option2">
                                                        <label style= "margin-left: 9%" class="form-check-label" for="choice2a">
                                                          Yes
                                                        </label>
                                                      </div>
                                                <h6>     If yes, how frequent?</h6>
                                                <div class="form-check">
                                                    <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices2b" id="choice1b" value="option1" checked>
                                                    <label style= "margin-left: 9%"class="form-check-label" for="choice1b">
                                                        Occasional
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices2b" id="choice2b" value="option2">
                                                    <label style= "margin-left: 9%" class="form-check-label" for="choice2b">
                                                      Seldom
                                                    </label>
                                                  </div>
            
                                            </div>   
                                            <div class="col text-left">
                                                <form action="">
                                               <h6>  3. Do you take medication at present? 
                                                <div class="form-check">
                                                    <input style= "margin-left: 2%" type="radio" name="choices3c"  value="" checked>
                                                    <label style= "margin-left: 9%"class="form-check-label">
                                                      No
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input style= "margin-left: 2%" type="radio" name="choices3c"  value="">
                                                    <label style= "margin-left: 9%" class="form-check-label" >
                                                      Yes
                                                    </label>
                                                  </div>
                                                <h6>     If yes, please indicate below</h6>
                                                1.<input style="margin: 2%" type="text" name="" value=""><br>
                                                2.<input style="margin: 2%" type="text" name="" value=""><br>     
                                                3.<input style="margin: 2%" type="text" name="" value="">
                                            </div> 
                                                
                                         </div>             
                                    </div><br>
                                     
                                    <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="row">
                                            
                                            <div class="col text-left ">
                                                <p class="register-heading text-center">(To be accomplished by physician)</p>
                                                <table class="table table-bordered ">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th>Normal</th>
                                                            <th>Abnormal</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <form>
                                                        <tr>
                                                            <td>
                                                                <td>Skin</td>
                                                            <td><input  type="radio" name="d1" value=""></td>
                                                            <td><input type="radio" name="d1" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Head / Neck / Scalp</td>
                                                            <td><input  type="radio" name="d2" value=""></td>
                                                            <td><input type="radio" name="d2" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Eyes</td>
                                                            <td><input  type="radio" name="d3" value=""></td>
                                                            <td><input type="radio" name="d3" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Ears/Nose/Throat</td>
                                                            <td><input  type="radio" name="d4" value=""></td>
                                                            <td><input type="radio" name="d4" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Nose/Sinuses</td>
                                                            <td><input  type="radio" name="d5" value=""></td>
                                                            <td><input type="radio" name="d5" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Mouth/Throat</td>
                                                            <td><input  type="radio" name="d6" value=""></td>
                                                            <td><input type="radio" name="d6" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Neck, LN, Thyroid</td>
                                                            <td><input  type="radio" name="d7" value=""></td>
                                                            <td><input type="radio" name="d7" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Chest-Breast-Axilla</td>
                                                            <td><input  type="radio" name="d8" value=""></td>
                                                            <td><input type="radio" name="d8" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Lungs</td>
                                                            <td><input  type="radio" name="d9" value=""></td>
                                                            <td><input type="radio" name="d9" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Heart</td>
                                                            <td><input  type="radio" name="d10" value=""></td>
                                                            <td><input type="radio" name="d10" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Abdomen</td>
                                                            <td><input  type="radio" name="d11" value=""></td>
                                                            <td><input type="radio" name="d12" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Back, Flank</td>
                                                            <td><input  type="radio" name="d13" value=""></td>
                                                            <td><input type="radio" name="d13" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Anus-rectum</td>
                                                            <td><input  type="radio" name="d14" value=""></td>
                                                            <td><input type="radio" name="d14" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>GU system</td>
                                                            <td><input  type="radio" name="d15" value=""></td>
                                                            <td><input type="radio" name="d15" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Inguinals, Genitals</td>
                                                            <td><input  type="radio" name="d16" value=""></td>
                                                            <td><input type="radio" name="d16" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Reflexes</td>
                                                            <td><input  type="radio" name="d17" value=""></td>
                                                            <td><input type="radio" name="d17" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Extremities</td>
                                                            <td><input  type="radio" name="d18" value=""></td>
                                                            <td><input type="radio" name="d18" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Neurologic</td>
                                                            <td><input  type="radio" name="d19" value=""></td>
                                                            <td><input type="radio" name="d19" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Endocrine</td>
                                                            <td><input  type="radio" name="d20" value=""></td>
                                                            <td><input type="radio" name="d20" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <td>Others</td>
                                                            <td><input  type="radio" name="d21" value=""></td>
                                                            <td><input type="radio" name="d21" value=""></td>
                                                            <td><input type="text" name="" value=""></td>
                                                            </td>
                                                        </tr>
                                                        </form>
                                                        </tbody>
                                                 
                                                </table>               
            
                                            </div>
                                         </div>          
                                      </div>
                                      <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="row">
                                            <div class="col text-center "  >
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
                                      </div>
                                      <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="row">
                                            <div class="col text-center">
                                                <form action="">
                                                <table align="center">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Time:</th>
                                                            <th>By:</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="text" name="" value=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="text" name="" value=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="text" name="" value=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                            <td><input style="margin: 4%"type="text" name="" value=""></td>
                                                        </tr>
                                                        
                                                        </tbody>
                                                    </table><br>
                                            </div>
                                        </div>            
                                      </div>
                                      <div class="tab-pane fade p-3" id="seven" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="row">
                                            <div class="col text-center">
                                                <form action="">
                                                <h6> <h6>
                                                <td><input style="margin-left: 2%" type="checkbox" name="name1" /> Physically Fit &nbsp;
                                                    <input type="checkbox" name="name2" /> Not Physically Fit &nbsp;</td><br><br>
                                                    <textarea class="form-control"></textarea><br>
                                                    Date of Examination: <input type="date" name="" value="">
                                                   
                                            </div>
            
                                            <div class="col text-center">
                                                <form action="">
                                                
                                                    <br><br>
                                                    <p>By:<input style="margin-left: 2%" type="text" name="" value="">,MD<br><br>
                                                    Licence No. <input type="number" name="" value=""></p>   
                                                    <b class="font-italic">MEDICAL EXAMINER</b> 
                                            </div>
                                        </div>
                                    
                                    </div>
                            </div>
                            
                            
                                    
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

                    </div>
                
                       
                     
                </div>
                
                                        
                @stop
                       
                          {{--
                        <div class="container register"> <br>             
                            <h3 class="register-heading text-left"><br>A. PAST MEDICAL HISTORY</h3><br>
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
                             </div>
                             <div class="row">
                             <div class="col text-left">
                                <b><br><br>For Women:<br> Last Menstrual Period(LMP) </b><br><input type="date" name="" value="">
                            </div>
                            <div class="col text-left">
                                <h6><br><br><br><b>Menstrual Pattern:</b><h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Regular
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                          Irregular
                                        </label>
                                      </div>
                             </div>
                        </div>
                            
    
                        
                        <br><h3 class="register-heading text-left"><br>B. FAMILY HISTORY</h3><br>
                            <div class="row">
                                    <div class="col text-left">
                                        <p>Do you have a close relative (parent/grandparents/siblings) who have been diagnosed of:</p>
                                                <form action=""><p>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> High Blood Pressure<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Tuberculosis<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Heart Disease<br>
                                                <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Asthma<br>
                                            <br>
                                    </div>
                                    <div class="col text-left">
                                        <form action="">
                                        <br><br><br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Diabetes<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Allergies<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Cancer<br>
                                        <input style= "margin-left: 2%" type="checkbox" name="history" value=""> Other:
                                        <input style= "margin-left: 2%" type="text" name="" value="">
                                        <br>
                                    </div>
                                 </div>
                            
                        <h3 class="register-heading text-left"><br>C. SOCIAL HISTORY</h3><br>
                             <div class="row">
                                <div class="col text-left">
                                    <form action="">
                                    <h6>  1. Do you Smoke? 
                                        <div class="form-check">
                                            <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1" id="choice1" value="option1" checked>
                                            <label style= "margin-left: 9%"class="form-check-label" for="choice1" >
                                              No
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1" id="choice2" value="option2">
                                            <label style= "margin-left: 9%" class="form-check-label" for="choice2">
                                              Yes
                                            </label>
                                          </div>
                                    <h6>     If yes, how many packs?</h6><input style="margin: 2%" type="number" name="" value="">
                                    <h6> <br> 2. Do you drink alcohol (beer/liquer)? 
                                        <div class="form-check">
                                            <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1a" id="choice1a" value="option1" checked>
                                            <label style= "margin-left: 9%"class="form-check-label" for="choice1a">
                                              No
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices1a" id="choice2a" value="option2">
                                            <label style= "margin-left: 9%" class="form-check-label" for="choice2a">
                                              Yes
                                            </label>
                                          </div>
                                    <h6>     If yes, how frequent?</h6>
                                    <div class="form-check">
                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices2b" id="choice1b" value="option1" checked>
                                        <label style= "margin-left: 9%"class="form-check-label" for="choice1b">
                                            Occasional
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="choices2b" id="choice2b" value="option2">
                                        <label style= "margin-left: 9%" class="form-check-label" for="choice2b">
                                          Seldom
                                        </label>
                                      </div>

                                </div>   
                                <div class="col text-left">
                                    <form action="">
                                   <h6>  3. Do you take medication at present? 
                                    <div class="form-check">
                                        <input style= "margin-left: 2%" type="radio" name="choices3c"  value="" checked>
                                        <label style= "margin-left: 9%"class="form-check-label">
                                          No
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input style= "margin-left: 2%" type="radio" name="choices3c"  value="">
                                        <label style= "margin-left: 9%" class="form-check-label" >
                                          Yes
                                        </label>
                                      </div>
                                    <h6>     If yes, please indicate below</h6>
                                    1.<input style="margin: 2%" type="text" name="" value=""><br>
                                    2.<input style="margin: 2%" type="text" name="" value=""><br>     
                                    3.<input style="margin: 2%" type="text" name="" value="">
                                </div> 
                                    
                             </div> 

                             <br><br><h3 class="register-heading text-left">D. PHYSICAL EXAMINATION </h3>
                             <p class="register-heading text-left">(To be accomplished by physician)</p> 
                             <div class="row">
                                <div class="col text-left">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Normal</th>
                                                <th>Abnormal</th>
                                                <th></th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form>
                                            <tr>
                                                <td>
                                                    <td>Skin</td>
                                                <td><input  type="radio" name="d1" value=""></td>
                                                <td><input type="radio" name="d1" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Head / Neck / Scalp</td>
                                                <td><input  type="radio" name="d2" value=""></td>
                                                <td><input type="radio" name="d2" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Eyes</td>
                                                <td><input  type="radio" name="d3" value=""></td>
                                                <td><input type="radio" name="d3" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Ears/Nose/Throat</td>
                                                <td><input  type="radio" name="d4" value=""></td>
                                                <td><input type="radio" name="d4" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Nose/Sinuses</td>
                                                <td><input  type="radio" name="d5" value=""></td>
                                                <td><input type="radio" name="d5" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Mouth/Throat</td>
                                                <td><input  type="radio" name="d6" value=""></td>
                                                <td><input type="radio" name="d6" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Neck, LN, Thyroid</td>
                                                <td><input  type="radio" name="d7" value=""></td>
                                                <td><input type="radio" name="d7" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Chest-Breast-Axilla</td>
                                                <td><input  type="radio" name="d8" value=""></td>
                                                <td><input type="radio" name="d8" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Lungs</td>
                                                <td><input  type="radio" name="d9" value=""></td>
                                                <td><input type="radio" name="d9" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Heart</td>
                                                <td><input  type="radio" name="d10" value=""></td>
                                                <td><input type="radio" name="d10" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Abdomen</td>
                                                <td><input  type="radio" name="d11" value=""></td>
                                                <td><input type="radio" name="d12" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Back, Flank</td>
                                                <td><input  type="radio" name="d13" value=""></td>
                                                <td><input type="radio" name="d13" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Anus-rectum</td>
                                                <td><input  type="radio" name="d14" value=""></td>
                                                <td><input type="radio" name="d14" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>GU system</td>
                                                <td><input  type="radio" name="d15" value=""></td>
                                                <td><input type="radio" name="d15" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Inguinals, Genitals</td>
                                                <td><input  type="radio" name="d16" value=""></td>
                                                <td><input type="radio" name="d16" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Reflexes</td>
                                                <td><input  type="radio" name="d17" value=""></td>
                                                <td><input type="radio" name="d17" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Extremities</td>
                                                <td><input  type="radio" name="d18" value=""></td>
                                                <td><input type="radio" name="d18" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Neurologic</td>
                                                <td><input  type="radio" name="d19" value=""></td>
                                                <td><input type="radio" name="d19" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Endocrine</td>
                                                <td><input  type="radio" name="d20" value=""></td>
                                                <td><input type="radio" name="d20" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <td>Others</td>
                                                <td><input  type="radio" name="d21" value=""></td>
                                                <td><input type="radio" name="d21" value=""></td>
                                                <td></td>
                                                <td><input type="text" name="" value=""></td>
                                                </td>
                                            </tr>
                                            </form>
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

                            <br><br><h3 class="register-heading text-left">F. NURSING INTERVENTIONS</h3><br>
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
                                                <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                <td><input style="margin: 4%"type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                <td><input style="margin: 4%"type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                <td><input style="margin: 4%"type="text" name="" value=""></td>
                                            </tr>
                                            <tr>
                                                <td><input style="margin: 4%" type="text" name="" value=""></td>
                                                <td><input style="margin: 4%"type="time" name="" value=""></td>
                                                <td><input style="margin: 4%"type="text" name="" value=""></td>
                                            </tr>
                                            
                                            </tbody>
                                        </table><br>
                                </div>
                            </div>

                            <br><h3 class="register-heading text-left">G. ASSESSMENT AND RECOMMENDATIONS</h3>
                             <div class="row">
                                <div class="col text-left">
                                    <form action="">
                                    <h6> <h6>
                                    <td><input style="margin-left: 2%" type="checkbox" name="name1" /> Physically Fit &nbsp;
                                        <input type="checkbox" name="name2" /> Not Physically Fit &nbsp;</td><br><br>
                                        <textarea class="form-control"></textarea><br>
                                        Date of Examination: <input type="date" name="" value="">
                                       
                                </div>

                                <div class="col text-left">
                                    <form action="">
                                    
                                        <br><br>
                                        <p>By:<input style="margin-left: 2%" type="text" name="" value="">,MD<br><br>
                                        Licence No. <input type="number" name="" value=""></p>   
                                        <b class="font-italic">MEDICAL EXAMINER</b> 
                                </div>
                            </div>
                            
                    
                            <br><br><button style="postion: center" type ="button" class = "btn btn-info">Register</button>
                        <br><br><br>
                        </div>
                </div>
                
                        
            </div>    
            --}}
                     
