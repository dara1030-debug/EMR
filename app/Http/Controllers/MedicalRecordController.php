<?php

namespace App\Http\Controllers;

use App\MedicalRecord;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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

	public function store()
	{
		request()->validate([
			"date_of_consultation" => "required",
			"time_of_consultation" => "required",
			"chief_complaint" => "required",
			"nurse_assigned" => "required",
			"diagnosis" => "required",
		]);

		$filePath = null;
		if ( request()->hasFile('file') 
			&& request()->file('file')->isValid() ) {
				
            request()->validate([
                'file' => 'max:2048',
            ]);

            /** Variables. */
            $file = request()->file('file');
            $host = request()->getSchemeAndHttpHost();

            /** Uploading the image. */
            $storage = Storage::disk('public');
            $filePath = $storage->putFile('files', new File($file), 'public');
            $filePath = $host.'/storage/'.$filePath;
        }
		
		$data = request()->all();
		$data = Arr::except($data, [
			'_token',
			'file'
		]);
		$data['file'] = $filePath;

		MedicalRecord::create($data);
		
		return redirect()->back()->with('success', 'A new medical record was added.');
	}

	public function create()
	{
		return view('medicalreport.create');
	}
}
