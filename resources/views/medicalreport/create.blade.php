@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/medicalreport.index">Medical Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/medicalreport.create">Add New Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#">Attach File</a>
        </li>
      </ul>
      
    </div>
    <div class="card-body">
        <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validation1">Name of Service</label>
                <select class="custom-select" required>
                    <option value="">Name of Service</option>
                    <option value="1">Checkup</option>
                    <option value="2">Vaccine</option>
                    <option value="3">Blood Type Test</option>
                    <option value="4">Urinary Test</option>
                    <option value="5">Hematology Test</option>
                    <option value="6">First Aid</option>
                    <option value="7">Check Blood Pressure</option>
                    <option value="8">Follow Up Checkup</option>
                  </select>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validation2">Findings</label>
                <input type="text" class="form-control" id="validation2" placeholder="Doctor's Findings" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validation3">Recommendation</label>
                <input type="text" class="form-control" id="validation3" placeholder="Recommendation" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom4">Added By</label>
                <select class="custom-select" required>
                    <option value="">Added by</option>
                    <option value="1">Dr</option>
                    <option value="2">Dr</option>
                    <option value="3">Dr</option>
                  </select>
                <div class="invalid-feedback">
                  Please provide name.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validation5">Date Added</label>
                <input type="Date" class="form-control" id="validation5" placeholder="Month-Date-Year" required>
                <div class="invalid-feedback">
                  Please Add Date
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validation6">Attach File</label>
                <input type="file" class="form-control" id="validation6" placeholder="Attach Lab Report" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>


                <div class="col">
                    <br><br>
                    <a href="#" class="btn btn-info btn-md">Save</a>
                    <a href="#" class="btn btn-secondary btn-md">Cancel</a>
                </div>
          </form>
          
    </div>
  </div>
@stop