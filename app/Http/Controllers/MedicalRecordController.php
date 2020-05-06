<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
	public function index()
	{
		return view('medicalreport.index');
	}

	public function edit($id)
	{
		$patient = Patient::findOrFail($id);
		
		return view('medicalreport.edit', [
			'patient' => $patient
		]);
	}

	public function show($id)
	{
		$patient = Patient::findOrFail($id);
		
		return view('medicalreport.show', [
			'patient' => $patient
		]);
	}

	public function create()
	{
		return view('medicalreport.create');
	}
}
