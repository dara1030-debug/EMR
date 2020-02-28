<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
	public function index()
	{
		return view('medicalreport.index');
	}

	public function edit($id)
	{
		return view('medicalreport.edit');
	}

	public function show($id)
	{
		return view('medicalreport.show');
	}

	public function create()
	{
		return view('medicalreport.create');
	}
}
