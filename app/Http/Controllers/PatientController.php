<?php

namespace App\Http\Controllers;

use App\HealthExaminationRecord;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('last_name','asc')->paginate(20);

        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'first_name',
            'middle_name',
            'last_name',
            'gender',
            'address',
            'phone_number',
            'college_department',
            'type',
            'status',
            'home_address',
            'present_address',
            'age',
            'birthdate',
        ]);

        $data['added_by'] = auth()->user()->id;
        
        $patient = Patient::create($data);
        
        $pastMedicalHistory = $request->only([
            'pastmedical_history',
            'last_menstrual_period',
            'menstrual_pattern',
        ]);
        $familyHistory = $request->only('family_history');
        $socialHistory = $request->only([
            'is_smoking',
            'packs_smoked',
            'is_drinking_beer',
            'drinking_frequency',
            'is_taking_medication',
            'medications',
        ]);
        $physicalExamination = $request->only([
            'skin_status',
            'skin_remarks',
            'head_status',
            'head_remarks',
            'eyes_status',
            'eyes_remarks',
            'ears_status',
            'ears_remarks',
            'nose_status',
            'nose_remarks',
            'mouth_status',
            'mouth_remarks',
            'neck_status',
            'neck_remarks',
            'chest_status',
            'chest_remarks',
            'lungs_normal',
            'lungs_remarks',
            'heart_status',
            'heart_remarks',
            'abdomen_status',
            'abdomen_remarks',
            'back_status',
            'back_remarks',
            'anus_status',
            'anus_remarks',
            'gu_system_status',
            'gu_system_remarks',
            'genitals_status',
            'genitals_remarks',
            'reflexes_status',
            'reflexes_remarks',
            'extermities_status',
            'extremities_remarks',
            'neurologic_status',
            'neurologic_remarks',
            'endocrine_status',
            'endocrine_remarks',
            'others_status',
            'others_remarks',
        ]);
        $vitalSigns = $request->only([
            'temperature',
            'pulse_rate',
            'respiratory_rate',
            'blood_pressure',
            'weight',
        ]);
        $assesment = $request->only([
            'physically_fit',
            'date_examined',
            'by',
            'license_no',
        ]);
        
        $examination = HealthExaminationRecord::create([
            'patient_id' => $patient->id,
            'past_medical_history' => $pastMedicalHistory,
            'family_history' => $familyHistory,
            'social_history' => $socialHistory,
            'phyiscal_examination' => $physicalExamination,
            'vital_signs' => $vitalSigns,
            'assessment' => $assesment,
            'added_by' => auth()->user()->id,
        ]);
        
        return redirect()->back()->with('success', 'A new patient has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id); // gi edit ko muna para makita ko output pag e click ang view hihi
         
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'first_name',
            'middle_name',
            'last_name',
            'gender',
            'address',
            'phone_number',
            'college_department',
            'type',
            'status',
            'home_address',
            'present_address',
            'age',
            'birthdate',
        ]);

        $data['updated_by'] = auth()->user()->id;
        
        $patient = Patient::find($id);
        $patient->update($data);
        
        $pastMedicalHistory = $request->only([
            'pastmedical_history',
            'last_menstrual_period',
            'menstrual_pattern',
        ]);
        $familyHistory = $request->only('family_history');
        $socialHistory = $request->only([
            'is_smoking',
            'packs_smoked',
            'is_drinking_beer',
            'drinking_frequency',
            'is_taking_medication',
            'medications',
        ]);
        $physicalExamination = $request->only([
            'skin_status',
            'skin_remarks',
            'head_status',
            'head_remarks',
            'eyes_status',
            'eyes_remarks',
            'ears_status',
            'ears_remarks',
            'nose_status',
            'nose_remarks',
            'mouth_status',
            'mouth_remarks',
            'neck_status',
            'neck_remarks',
            'chest_status',
            'chest_remarks',
            'lungs_normal',
            'lungs_remarks',
            'heart_status',
            'heart_remarks',
            'abdomen_status',
            'abdomen_remarks',
            'back_status',
            'back_remarks',
            'anus_status',
            'anus_remarks',
            'gu_system_status',
            'gu_system_remarks',
            'genitals_status',
            'genitals_remarks',
            'reflexes_status',
            'reflexes_remarks',
            'extermities_status',
            'extremities_remarks',
            'neurologic_status',
            'neurologic_remarks',
            'endocrine_status',
            'endocrine_remarks',
            'others_status',
            'others_remarks',
        ]);
        $vitalSigns = $request->only([
            'temperature',
            'pulse_rate',
            'respiratory_rate',
            'blood_pressure',
            'weight',
        ]);
        $assesment = $request->only([
            'physically_fit',
            'date_examined',
            'by',
            'license_no',
        ]);
        
        $examination = HealthExaminationRecord::where('patient_id', $id)->first();
        $examination->update([
            'patient_id' => $patient->id,
            'past_medical_history' => $pastMedicalHistory,
            'family_history' => $familyHistory,
            'social_history' => $socialHistory,
            'phyiscal_examination' => $physicalExamination,
            'vital_signs' => $vitalSigns,
            'assessment' => $assesment,
            'added_by' => auth()->user()->id,
        ]);
        
        return redirect()->back()->with('success', 'A new patient has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
