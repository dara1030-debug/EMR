@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/medicalreport.index">Medical Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/medicalreport.create">Add New Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#">Attach File</a>
        </li>
      </ul>
      
    </div>
    <div class="card-body">
        <fieldset disabled>
        <div class="col-md-4 mb-3">
            <label for="validation2">Id Number</label>
            <input type="text" class="form-control" id="validation2" placeholder="ID NUMBER" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validation2">Patient</label>
            <input type="text" class="form-control" id="validation2" placeholder="Patient Name" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="validation2">Patient Type</label>
            <input type="text" class="form-control" id="validation2" placeholder="Student Type" required>
          </div>
        </fieldset>


        <table class="table table-bordereds table-responsive-md">
            <thead class="text-center thead-light">
              <tr>
                <th scope="col">Service</th>
                <th scope="col">Findings</th>
                <th scope="col">Recommendation</th>
                <th scope="col">Done By:</th>
                <th scope="col">Date of Issue</th>
                <th scope="col">Attach Lab Report</th>
              </tr>
            </thead>
            <tr>
                <td>Checkup</td>
                <td>Sick</td>
                <td>Drink 1-2 Tab of Paracetamol a day every Morning after Breakfast</td>
                <td>DR.chuchu</td>
                <td>Feb.29.2020</td>
                <td>
                    <a class="btn btn-info" href="#">Upload File (img/pdf)</a>
                </td>
            </tr>
            </tbody>
          </table>
    </div>
  </div>
@stop