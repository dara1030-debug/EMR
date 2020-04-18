<div class="form-group">
    <label for="idnum">ID Number:</label>
    <input type="number" class="form-control" placeholder="ID Number *" id="idnum" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
                                                {{--2--}}@csrf
                            <br><button type ="submit" class = "btn btn-info">Register</button>
                            <button type="submit">submit</button>
                                        {{-- Hi Anne, this button works. --}}

                                                <div class="row justify-content-center align-items-center">
                                                <div class="container" >
                                                    <div class="row register-form ">
                                                        <div class="form-group">
                                                            <div class="card mt-3 tab-card mr-10" >
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
                                                                    {{--Tab1--}}
                                                                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                                                        <div class="row">
                                                                            <div class="col text-left">
                                                                                <div class="form-group form-check">
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Allergies"> Allergies<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Amoebiasis"> Amoebiasis<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Anemia"> Anemia<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Arthritis"> Arthritis<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Back and Joints Pains"> Back and Joints Pains<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Bone Fracture"> Bone Fracture<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Breast mass/lump"> Breast mass/lump<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Chest Pains"> Chest Pains<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Chicken Pox"> Chicken Pox<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Diabetes Mellitus"> Diabetes Mellitus<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Epilepsy"> Epilepsy<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Eye or Ear Problem"> Eye or Ear Problem<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Gallbladder Stone"> Gallbladder Stone<br>
                                                                                </div>   
                                                                            </div>
                                                                            <div class="col text-left">
                                                                                <div class="form-group form-check">
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Goiter"> Goiter<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Gout"> Gout<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Hemorrhoids"> Hemorrhoids<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Hepatitis: A/B/C"> Hepatitis: A/B/C<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Hyperacidity/Ulcer"> Hyperacidity/Ulcer<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Hypertension"> Hypertension<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Kidney/Bladder Stones"> Kidney/Bladder Stones<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Loss of Conciousness"> Loss of Conciousness<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Measles"> Measles<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Mumps"> Mumps<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Pneumonia"> Pneumonia<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Prostate Problems"> Prostate Problems<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Seizure"> Seizure<br>
                                                                                </div>
                                                                            </div>    
                                                                            <div class="col text-left">
                                                                                <div class="form-group form-check">
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Sinusitis/Allergic rhinitis"> Sinusitis/Allergic rhinitis<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Skin Disorders"> Skin Disorders<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="STI/HIV"> STI/HIV<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Stroke"> Stroke<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Surgery/Injury"> Surgery/Injury<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Thyroid Problems"> Thyroid Problems<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Tonsillitis"> Tonsillitis<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Tuberculosis"> Tuberculosis<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="UTI"> UTI<br>
                                                                                    <input style= "margin-left: 2%" type="checkbox"> Others: 
                                                                                    <input style= "margin-left: 2%" type="text" name="family_history[]">
                                                                                    <br><br>    
                                                                                 </div>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="row">
                                                                            <div class="col text-center">
                                                                                <b><br><br>For Women:<br> Last Menstrual Period(LMP) </b><br><input type="date" name="last_menstrual_period">
                                                                            </div>
                                                                            <div class="col text-center">
                                                                                <h6><br><br><br><b>Menstrual Pattern:</b><h6>
                                                                                    <div class="form-group form-check">
                                                                                    <input class="form-check-input" type="radio" name="menstrual_pattern" id="exampleRadios1" value="Regular" checked>
                                                                                    <label class="form-check-label" for="exampleRadios1">
                                                                                        Regular
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-group form-check">
                                                                                    <input class="form-check-input" type="radio" name="menstrual_pattern" id="exampleRadios2" value="Irregular">
                                                                                    <label class="form-check-label" for="exampleRadios2">
                                                                                        Irregular
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>            
                                                                    
                                                                    </div> {{--end /div tab1}}

                                                                    {{--tab2--}}
                                                                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                                                        <div class="row">
                                                                            <div class="col text-left">
                                                                                <div class="form-group form-check">
                                                                                    <p>Do you have a close relative (parent/grandparents/siblings) who have been diagnosed of:</p>
                                                                            
                                                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="High Blood Pressure"> High Blood Pressure<br>
                                                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Tuberculosis"> Tuberculosis<br>
                                                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Heart Disease"> Heart Disease<br>
                                                                                            <input style= "margin-left: 2%" type="checkbox" name="family_history[]" value="Asthma"> Asthma<br>
                                                                                        <br>
                                                                                </div>        
                                                                            </div>
                                                                            <div class="col text-left">
                                                                                <div class="form-group form-check">
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
                                                                    </div> {{--end /div2--}}

                                                                    {{--tab3--}}
                                                                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                                                        <div class="row">
                                                                            <div class="col text-left" style= "margin-left: 14%">
                                                                                <div class="form-group">
                                                                                    <h6>  1. Do you Smoke? </h6>
                                                                                    <div class="form-check">
                                                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="is_smoking" id="choice1" value="No" checked>
                                                                                        <label style= "margin-left: 9%"class="form-check-label" for="choice1" >
                                                                                            No
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="is_smoking" id="choice2" value="Yes">
                                                                                        <label style= "margin-left: 9%" class="form-check-label" for="choice2">
                                                                                            Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <h6>     If yes, how many packs?</h6><input style="margin: 2%" type="number" name="packs_smoked">
                                                                                    <h6> <br> 2. Do you drink alcohol (beer/liquer)? 
                                                                                    <div class="form-check">
                                                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="is_drinking_beer" id="choice1a" value="No" checked>
                                                                                        <label style= "margin-left: 9%"class="form-check-label" for="choice1a">
                                                                                            No
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="is_drinking_beer" id="choice2a" value="Yes">
                                                                                        <label style= "margin-left: 9%" class="form-check-label" for="choice2a">
                                                                                            Yes
                                                                                        </label>
                                                                                    </div>
                                                                                    <h6>     If yes, how frequent?</h6>
                                                                                    <div class="form-check">
                                                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="drinking_frequency" id="choice1b" value="Occasional" checked>
                                                                                            <label style= "margin-left: 9%"class="form-check-label" for="choice1b">
                                                                                                Occasional
                                                                                            </label>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input style= "margin-left: 2%" class="form-check-input" type="radio" name="drinking_frequency" id="choice2b" value="Seldom">
                                                                                        <label style= "margin-left: 9%" class="form-check-label" for="choice2b">
                                                                                            Seldom
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>   

                                                                            <div class="col text-left">
                                                                                <div class="form-group">
                                                                                     <h6>  3. Do you take medication at present? </h6>
                                                                                    <div class="form-check">
                                                                                            <input style= "margin-left: 2%" type="radio" name="is_taking_medication"  value="No" checked>
                                                                                            <label style= "margin-left: 9%"class="form-check-label">
                                                                                                No
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input style= "margin-left: 2%" type="radio" name="is_taking_medication"  value="Yes">
                                                                                            <label style= "margin-left: 9%" class="form-check-label" >
                                                                                                Yes
                                                                                            </label>
                                                                                        </div>
                                                                                        <h6>     If yes, please indicate below</h6>
                                                                                        1.<input style="margin: 2%" type="text" name="medications[]"><br>
                                                                                        2.<input style="margin: 2%" type="text" name="medications[]"><br>     
                                                                                        3.<input style="margin: 2%" type="text" name="medications[]">
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
                                                                                        <td><input  type="radio" name="skin_status" value="normal"></td>
                                                                                        <td><input type="radio" name="skin_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="skin_remarks"></td>
                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Head / Neck / Scalp</td>
                                                                                        <td><input  type="radio" name="head_status" value="normal"></td>
                                                                                        <td><input type="radio" name="head_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="head_remarks"></td>
                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Eyes</td>
                                                                                        <td><input  type="radio" name="eyes_status" value="normal"></td>
                                                                                        <td><input type="radio" name="eyes_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="eyes_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Ears/Nose/Throat</td>
                                                                                        <td><input  type="radio" name="ears_status" value="normal"></td>
                                                                                        <td><input type="radio" name="ears_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="ears_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Nose/Sinuses</td>
                                                                                        <td><input  type="radio" name="nose_status" value="normal"></td>
                                                                                        <td><input type="radio" name="nose_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="nose_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Mouth/Throat</td>
                                                                                        <td><input  type="radio" name="mouth_status" value="normal"></td>
                                                                                        <td><input type="radio" name="mouth_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="mouth_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Neck, LN, Thyroid</td>
                                                                                        <td><input  type="radio" name="neck_status" value="normal"></td>
                                                                                        <td><input type="radio" name="neck_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="neck_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Chest-Breast-Axilla</td>
                                                                                        <td><input  type="radio" name="chest_status" value="normal"></td>
                                                                                        <td><input type="radio" name="chest_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="chest_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Lungs</td>
                                                                                        <td><input  type="radio" name="lungs_normal" value="normal"></td>
                                                                                        <td><input type="radio" name="lungs_normal" value="abnormal"></td>
                                                                                        <td><input type="text" name="lungs_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Heart</td>
                                                                                        <td><input  type="radio" name="heart_status" value="normal"></td>
                                                                                        <td><input type="radio" name="heart_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="heart_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Abdomen</td>
                                                                                        <td><input  type="radio" name="abdomen_status" value="normal"></td>
                                                                                        <td><input type="radio" name="abdomen_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="abdomen_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Back, Flank</td>
                                                                                        <td><input  type="radio" name="back_status" value="normal"></td>
                                                                                        <td><input type="radio" name="back_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="back_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Anus-rectum</td>
                                                                                        <td><input  type="radio" name="anus_status" value="normal"></td>
                                                                                        <td><input type="radio" name="anus_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="anus_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>GU system</td>
                                                                                        <td><input  type="radio" name="gu_system_status" value="normal"></td>
                                                                                        <td><input type="radio" name="gu_system_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="gu_system_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Inguinals, Genitals</td>
                                                                                        <td><input  type="radio" name="genitals_status" value="normal"></td>
                                                                                        <td><input type="radio" name="genitals_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="genitals_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Reflexes</td>
                                                                                        <td><input  type="radio" name="reflexes_status" value="normal"></td>
                                                                                        <td><input type="radio" name="reflexes_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="reflexes_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Extremities</td>
                                                                                        <td><input  type="radio" name="extermities_status" value="normal"></td>
                                                                                        <td><input type="radio" name="extermities_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="extremities_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Neurologic</td>
                                                                                        <td><input  type="radio" name="neurologic_status" value="normal"></td>
                                                                                        <td><input type="radio" name="neurologic_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="neurologic_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Endocrine</td>
                                                                                        <td><input  type="radio" name="endocrine_status" value="normal"></td>
                                                                                        <td><input type="radio" name="endocrine_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="endocrine_remarks"></td>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <td>Others</td>
                                                                                        <td><input  type="radio" name="others_status" value="normal"></td>
                                                                                        <td><input type="radio" name="others_status" value="abnormal"></td>
                                                                                        <td><input type="text" name="others_remarks" value=""></td>
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
                                                                <div class="row">
                                                                    <div class="col text-center ">
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
                                                            </div> {{--end /div tab5--}}

                                                            {{--tab6--}}
                                                            <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="three-tab">
                                                                <div class="row">
                                                                    <div class="col text-center col-responsive-md">
                                                                        <form action="">
                                                                        <table style="align:center">
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
                                                            </div> {{--end /div tab6--}}
                                                            
                                                                {{--tab7--}}
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
                                                                </div> {{--end /div tab7--}}
                                                        </div> {{--end /div 2.3--}}
                                                    </div> {{--end /div 2.2--}}
                                                </div> {{--end /div 2--}}
                                                <br><button  type ="submit" class = "btn btn-info">Register</button>
                                                <a href="/patients" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                            
       