@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
                <br>
            <div class="card-deck" >
                <div class="card border-primary">       
                        <a href="/patients" class="nav-link">
                            <img class="card-img-top" src="img/p1.png" alt="Card image">
                            <p class="card-body text-center">Manage Patients</p>
                        </a>
                </div>
                <div class="card border-primary">
                    <a href="/users" class="nav-link">
                        <img class="card-img-top" src="img/p2.png" alt="Card image">
                        <p class="card-body text-center">Manage Users</p>
                    </a>
                </div>
                <div class="card border-primary">
                    <a href="index.html" class="nav-link">
                        <img class="card-img-top" src="img/p3.png" alt="Card image">
                        <p class="card-body text-center">Manage Services</p>
                    </a>
    
                </div>
                <div class="card border-primary">
                    <a href="/labreports" class="nav-link">
                        <img class="card-img-top" src="img/p4.png" alt="Card image">
                        <p class="card-body text-center">Generate Report</p>
                    </a>
                </div>
            </div>
        </div>
            
    </div>
    
    
@endsection


