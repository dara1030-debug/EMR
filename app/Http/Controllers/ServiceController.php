<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function show($id)
    {
        $service = 'Service'.$id;
        
        return view('services.show')->with('service');
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        return dd($request->all());
    }

    public function edit()
    {
        return view('services.edit');
    }

    public function update(Request $request, $id)
    {
        return dd($request->all());
    }

    public function destroy($id)
    {
        return $id;
    }

    public function forceDestroy($id)
    {
        return $id;
    }

    public function restore($id)
    {
        return $id;
    }
}
