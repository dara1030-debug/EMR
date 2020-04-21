@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/patients">Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/patients/create">Add New Patient</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Archive</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/patients">View Patient... 
            <button type="button" class="close" href="/patients">&times; </button> </a>
          </li>
      </ul>
    </div>
    <div class="card-body">
         <div class="form-group text-center">
            <div class="col" style=" margin-top: 3%">
                <img src="/img/no_avatar.jpg"  alt="create_avatar" class="create_avatar "><br>{{--PRofile pic upload (Restrict user thaht only img/png file can be uploaded--}}
            </div>
        </div>
        <div class="form-group text-center">
            <div class="col">
                <h4 >{{ "$patient->first_name $patient->middle_name $patient->last_name" }}</h4>
                <h6>ID No. 2015-8418</h6> 
                <h6>Student</h6> {{--Patient Role must Reflect/ Student/ Faculty/Staff--}} 
                <a href="{{ route('medical-records.show', $patient->id) }}" class="btn btn-info">View Medical Record</a>
                <br><br>
            </div>
        </div>
        <div class="container">
                                {{--row1--}}
                                <div class="row ">
                                    <div class="col-2">
                                    </div>
                                    <div class="col">
                                        <h6 class><i>Home Address:</h6></i>
                                        <p>{{ $patient->home_address }}</p>
                                    <h6><i>Present Address:</h6></i>
                                    <p>{{ $patient->present_address }}</p>
                                        <h6><i>Civil Status:</i></h6>
                                        <p>Single</p>
                                        <h6><i>Gender:</i></h6>
                                        <p>{{ $patient->gender }}</p>
                                    </div>
                                    <div class="col">
                                        <h6><i>College/ Department:</i></h6>
                                        <p>College of Computer Studies</p>
                                        <h6><i>Phone Number:</i></h6>
                                        <p>{{ $patient->contact_number }}</p>   
                                        <h6><i>Birth Date/Month/Year:</i></h6>
                                        <p>{{ $patient->birthdate }}</p>
                                        <h6><i>Age:</i></h6>
                                        <p>{{ $patient->age }}</p>
                                    </div>
                                </div>

                            {{--row2--}}
                            <div class="row justify-content-center align-items-center">
                                <div class="border mt-3 tab-card mr-10" >
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

                                <fieldset disabled>
                                    <div class="tab-content" id="myTabContent">
                                        {{--tab1--}}
                                        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                            <div class="row">
                                                     <div class="col text-left">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Allergies"> Allergies<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Amoebiasis"> Amoebiasis<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Anemia"> Anemia<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Arthritis"> Arthritis<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Back and Joints Pains"> Back and Joints Pains<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Bone Fracture"> Bone Fracture<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Breast mass/lump"> Breast mass/lump<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Chest Pains"> Chest Pains<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Chicken Pox"> Chicken Pox<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Diabetes Mellitus"> Diabetes Mellitus<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Epilepsy"> Epilepsy<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Eye or Ear Problem"> Eye or Ear Problem<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Gallbladder Stone"> Gallbladder Stone<br>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                    <div class="col text-left">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Goiter"> Goiter<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Gout"> Gout<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Hemorrhoids"> Hemorrhoids<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Hepatitis: A/B/C"> Hepatitis: A/B/C<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Hyperacidity/Ulcer"> Hyperacidity/Ulcer<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Hypertension"> Hypertension<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Kidney/Bladder Stones"> Kidney/Bladder Stones<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Loss of Conciousness"> Loss of Conciousness<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Measles"> Measles<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Mumps"> Mumps<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Pneumonia"> Pneumonia<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Prostate Problems"> Prostate Problems<br>
                                                                <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Seizure"> Seizure<br>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                <div class="col text-left">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Sinusitis/Allergic rhinitis"> Sinusitis/Allergic rhinitis<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Skin Disorders"> Skin Disorders<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="STI/HIV"> STI/HIV<br>
                                                            <input style= "margin-left: 2%" type="checkbox" nname="pastmedical_history[]" value="Stroke"> Stroke<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Surgery/Injury"> Surgery/Injury<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Thyroid Problems"> Thyroid Problems<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Tonsillitis"> Tonsillitis<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="Tuberculosis"> Tuberculosis<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="pastmedical_history[]" value="UTI"> UTI<br>
                                                            <input style= "margin-left: 2%" type="checkbox"> Others: 
                                                            <input style= "margin-left: 2%" type="text" name="family_history[]">
                                                            <br><br>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="row">
                                                <div class="col text-center">
                                                    <b><br><br>For Women:<br> Last Menstrual Period(LMP) </b><br><input class="ml-auto mr-auto mt-2 form-control mb-5 col-sm-5" type="date" name="last_menstrual_period">
                                                </div>
                                                <div class="col text-center">
                                                    <h6><br><br><br><b>Menstrual Pattern:</b><h6>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="custom-control-input" id="mp1" name="menstrual_pattern" value="male">
                                                            <label class="custom-control-label mt-2" for="mp1">Regular</label>
                                                          </div>   
                                                          <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" class="custom-control-input" id="mp2" name="menstrual_pattern" value="female">
                                                            <label class="custom-control-label" for="mp2">Irregular</label>
                                                            <br>
                                                        </div> 
                                                </div>
                                            </div>         
                                        </div> {{--end /div tab1--}}

                                         {{--tab2--}}
                                         <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                            <div class="row">
                                                <div class="col text-left">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <p>Do you have a close relative (parent/grandparents/siblings) who have been diagnosed of:</p>
                                                    
                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="High Blood Pressure"> High Blood Pressure<br>
                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Tuberculosis"> Tuberculosis<br>
                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Heart Disease"> Heart Disease<br>
                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Asthma"> Asthma<br>
                                                                <br>
                                                        </div> 
                                                    </div>       
                                                </div>
                                                <div class="col text-left">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <br><br><br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Diabetes"> Diabetes<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Allergies"> Allergies<br>
                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Cancer"> Cancer<br>
                                                            <input style= "margin-left: 2%" type="checkbox"> Other:
                                                            <input style= "margin-left: 2%" type="text" name="family_history[]">
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>             
                                        </div> {{--end /div2--}}

                                         {{--tab3--}}
                                         <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                            <div class="row">
                                                <div class="col text-left" style= "margin-left: 14%">
                                                    <div class="form-group">
                                                        <h6><br>1. Do you Smoke? </h6>
                                                        <div class="form-check">
                                                            <div class="custom-control custom-radio ">
                                                                <input type="radio" class="custom-control-input" id="choice1" name="is_smoking" value="No">
                                                                <label class="custom-control-label" for="choice1">No</label>
                                                              </div>
                                                        </div>
                                                        <div class="form-check">   
                                                            <div class="custom-control custom-radio ">
                                                                <input style= "margin-left: 9%"type="radio" class="custom-control-input" id="choice2" name="is_smoking" value="Yes">
                                                                <label class="custom-control-label" for="choice2">Yes</label>
                                                                <br>
                                                             </div>
                                                        </div> 
                                                    
                                                        
                                                        <h6><br>If yes, how many packs?</h6>
                                                        <input class="form-control mb-3 col-sm-8 type="number" name="packs_smoked">
                                                        <h6> <br> 2. Do you drink alcohol (beer/liquer)? </h6>
                                                        <div class="form-check">
                                                            <div class="custom-control custom-radio ">
                                                                <input type="radio" class="custom-control-input" id="choice1a" name="is_drinking_beer" value="No">
                                                                <label class="custom-control-label" for="choice1a">No</label>
                                                            </div> 
                                                        </div>
                                                        <div class="form-check">
                                                            <div class="custom-control custom-radio ">
                                                                <input type="radio" class="custom-control-input" id="choice2a" name="is_drinking_beer" value="Yes">
                                                                <label class="custom-control-label" for="choice2a">Yes</label>
                                                            </div> 
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sel1"><h6><br>If yes, how frequent?</h6></label>
                                                            <select class="form-control col-sm-8" id="sel1" name="howfrequent">
                                                            <option class="hidden"  selected disabled>Please Choose:</option>
                                                              <option>Seldom</option>
                                                              <option>Occasional</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>   

                                                <div class="col text-left">
                                                    <div class="form-group">
                                                         <h6> <br> 3. Do you take medication at present? </h6>
                                                        <div class="form-check">
                                                            <div class="custom-control custom-radio ">
                                                                <input type="radio" class="custom-control-input" id="choice3a" name="is_taking_medication" value="No">
                                                                <label class="custom-control-label" for="choice3a">No</label>
                                                            </div> 
                                                        </div>
                                                            <div class="form-check">
                                                                <div class="custom-control custom-radio ">
                                                                    <input type="radio" class="custom-control-input" id="choice3b" name="is_taking_medication" value="Yes">
                                                                    <label class="custom-control-label" for="choice3b">Yes</label>
                                                                </div>
                                                            </div>
                                                            <h6> <br> If yes, please indicate below</h6>
                                                            <div class="form-check-inline">
                                                            <label for="if_yes1" class="mr-2"> 1.</label>
                                                            <input id="if_yes1" class="form-control mb-3 col-sm-15" type="text" name="medications[]"><br>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <label for="if_yes2" class="mr-2"> 2.</label>
                                                                <input id="if_yes2" class="form-control mb-3 col-sm-15" type="text" name="medications[]"><br>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <label for="if_yes3" class="mr-2"> 3.</label>
                                                                <input id="if_yes3" class="form-control mb-3 col-sm-15" type="text" name="medications[]"><br>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>     
                                                </div>             
                                        </div><br> {{--end /div3--}}

                                        
                                                {{--tab4--}}
                                                <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="three-tab">
                                                    <div class="table-responsive-md">
                                                        <div class="row">
                                                            <div class="col text-left table-responsive-md">
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
                                                                            <td><input type="radio" name="skin_status" value="normal"></td>
                                                                            <td><input type="radio" name="skin_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="skin_remarks"></td>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Head / Neck / Scalp</td>
                                                                            <td><input  type="radio" name="head_status" value="normal"></td>
                                                                            <td><input type="radio" name="head_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="head_remarks"></td>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Eyes</td>
                                                                            <td><input  type="radio" name="eyes_status" value="normal"></td>
                                                                            <td><input type="radio" name="eyes_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="eyes_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Ears/Nose/Throat</td>
                                                                            <td><input  type="radio" name="ears_status" value="normal"></td>
                                                                            <td><input type="radio" name="ears_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="ears_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Nose/Sinuses</td>
                                                                            <td><input  type="radio" name="nose_status" value="normal"></td>
                                                                            <td><input type="radio" name="nose_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="nose_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Mouth/Throat</td>
                                                                            <td><input  type="radio" name="mouth_status" value="normal"></td>
                                                                            <td><input type="radio" name="mouth_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="mouth_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Neck, LN, Thyroid</td>
                                                                            <td><input  type="radio" name="neck_status" value="normal"></td>
                                                                            <td><input type="radio" name="neck_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="neck_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Chest-Breast-Axilla</td>
                                                                            <td><input  type="radio" name="chest_status" value="normal"></td>
                                                                            <td><input type="radio" name="chest_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="chest_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Lungs</td>
                                                                            <td><input  type="radio" name="lungs_normal" value="normal"></td>
                                                                            <td><input type="radio" name="lungs_normal" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="lungs_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Heart</td>
                                                                            <td><input  type="radio" name="heart_status" value="normal"></td>
                                                                            <td><input type="radio" name="heart_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="heart_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Abdomen</td>
                                                                            <td><input  type="radio" name="abdomen_status" value="normal"></td>
                                                                            <td><input type="radio" name="abdomen_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="abdomen_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Back, Flank</td>
                                                                            <td><input  type="radio" name="back_status" value="normal"></td>
                                                                            <td><input type="radio" name="back_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="back_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Anus-rectum</td>
                                                                            <td><input  type="radio" name="anus_status" value="normal"></td>
                                                                            <td><input type="radio" name="anus_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="anus_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>GU system</td>
                                                                            <td><input  type="radio" name="gu_system_status" value="normal"></td>
                                                                            <td><input type="radio" name="gu_system_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="gu_system_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Inguinals, Genitals</td>
                                                                            <td><input  type="radio" name="genitals_status" value="normal"></td>
                                                                            <td><input type="radio" name="genitals_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="genitals_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Reflexes</td>
                                                                            <td><input  type="radio" name="reflexes_status" value="normal"></td>
                                                                            <td><input type="radio" name="reflexes_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="reflexes_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Extremities</td>
                                                                            <td><input  type="radio" name="extermities_status" value="normal"></td>
                                                                            <td><input type="radio" name="extermities_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="extremities_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Neurologic</td>
                                                                            <td><input  type="radio" name="neurologic_status" value="normal"></td>
                                                                            <td><input type="radio" name="neurologic_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="neurologic_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Endocrine</td>
                                                                            <td><input  type="radio" name="endocrine_status" value="normal"></td>
                                                                            <td><input type="radio" name="endocrine_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="endocrine_remarks"></td>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <td>Others</td>
                                                                            <td><input  type="radio" name="others_status" value="normal"></td>
                                                                            <td><input type="radio" name="others_status" value="abnormal"></td>
                                                                            <td><input class="form-control  col-sm-10" type="text" name="others_remarks" value=""></td>
                                                                            </td>
                                                                        </tr>
                                                                        </form>
                                                                        </tbody>
                                                                    
                                                                </table>       
                                                            </div>
                                                        </div>
                                                    </div>          
                                                </div> {{--end /div tab4--}}


                                                 {{--tab5--}}
                                                 <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="three-tab">
                                                    <div class="row justify-content-center ">
                                                        <div class="form-inline ">
                                                            
                                                                <label for="temp" class="mr-sm-2">Temperature :</label>
                                                                <input type="number" class="form-control mb-3 col-sm-3 mt-3" name="temperature" id="temp" value="">
                                                                <label class="form-control-label ml-1 mr-2"><i>°C</i></label>
                                                                <label for="pulse_rate" class="col-sm-2 ml-5 ">Pulse Rate :</label> 
                                                                <input type="number" class="form-control mb-3 ml-2 col-sm-3 mt-3" name="pulse_rate" id="pulse_rate" value="">
                                                                <label class="form-control-label ml-1 mr-2"><i>bpm</i></label>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center ">
                                                        <div class="form-inline ">
                                                            
                                                                <label for="r_r" class="mr-sm-2">Respiratory Rate:</label>
                                                                <input type="number" class="form-control mb-3 col-sm-3 mt-3" name="respiratory_rate" id="r_r" value="">
                                                                <label class="form-control-label ml-1 mr-2"><i>bpm</i></label>
                                                                <label for="bp" class="ml-sm-5 ">Blood Pressure :</label> 
                                                                <input type="number" class="form-control mb-3 ml-2 col-sm-3 mt-3" name="blood_pressure" id="bp" value="">
                                                                <label class="form-control-label ml-1 mr-2"><i>mmhg</i></label>
                                                        </div>
                                                    </div>

                                                    <div class="row justify-content-center ">
                                                        <div class="form-inline">
                                                            <label for="weight" class="mr-sm-2 mt-4 mb-4"> Weight : </label>
                                                            <input type="number" class="form-control col-sm-5 mt-4 mb-4" name="weight" id="weight" value="">
                                                            <label class="form-control-label ml-1"><i>kg</i></label>
                                                        </div>
                                                     </div>               
                                                </div> {{--end /div tab5--}}



                                                {{--tab6--}}
                                                <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="three-tab">
                                                            
                                                    <div class="row justify-content-center">
                                                         <div class="form-group ">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nurse Intervention:</th>
                                                                        <th>Time: <small>(12:59 am/pm)</small></th>
                                                                        <th class="pl-3">By:</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><input class="form-control col-sm-15 mb-2 mt-2" type="text" name="nursing_intervent" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-1 mt-2" type="time" name="time" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-2 mt-2" type="text" name="by" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input class="form-control col-sm-15 mb-2" type="text" name="nursing_intervent" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-1" type="time" name="time" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-2" type="text" name="by" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input class="form-control col-sm-15 mb-2" type="text" name="" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-1" type="time" name="" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-2" type="text" name="" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input class="form-control col-sm-15 mb-2" type="text" name="" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-1" type="time" name="" value=""></td>
                                                                        <td><input class="form-control col-sm-14 mb-2 ml-2" type="text" name="" value=""></td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table><br>
                                                        </div>
                                                    </div>            
                                                 </div> {{--end /div tab6--}}


                                                  {{--tab7--}}
                                                <div class="tab-pane fade p-3" id="seven" role="tabpanel" aria-labelledby="three-tab">
                                                    <div class="row justify-content-center">
                                                        <div class="form-group">
                                                            <p class="register-heading text-center"><b>ASSESSMENT AND RECOMMENDATION</b></p>
                                                            
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input mb-2" id="customRadio" name="physically_fit" value="Yes">
                                                                <label class="custom-control-label mb-3" for="customRadio">Physically Fit</label>
                                                              </div>   
                                                              <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" class="custom-control-input" id="customRadio1" name="physically_fit" value="No">
                                                                <label class="custom-control-label" for="customRadio1">Not Physically Fit</label>
                                                                <br>
                                                            </div> 
                                                              
                                                                <textarea class="form-control"></textarea><br>
                                                                <label >Date of Examination: </label>
                                                                <input class="form-control" type="date" name="date_examined" value="">
                                                                
                                                       
            
                                                                <br><br>
                                                                <div class="form-check-inline">
                                                                    <label class="form-control-label mr-2 mb-2">By: </label>
                                                                    <input class="form-control col-sm-12" type="text" name="by" value="">
                                                                    <label class="form-control-label ml-1"> ,MD</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="form-check-inline">
                                                                        <label class="form-control-label mr-2 "><br>License No.</label>
                                                                        <input class="form-control col-sm-8" type="number" name="license_no" value="">
                                                                    </div>
                                                                </div> 
                                                                <b class="font-italic">MEDICAL EXAMINER</b> 
                                                        </div>
                                                    </div>
                                                </div> {{--end /div tab7--}}
                                            </fieldset>
{{----------------------------------------------------------------------------}}
                                    </div>{{--end of all tab content--}}
  {{------------------------------------------------------------------------}}                                  
                                </div> {{--end of tabs--}}
                            </div>
 {{--------------------------------------------------------------------------}}               
            
        </div>

    </div>
                              
@stop