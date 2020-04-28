@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
    @endif


    <div class="card text-center">
                <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#labone" role="tab" aria-controls="One" aria-selected="true">Lab Report Urinalysis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#labtwo" role="tab" aria-controls="Two" aria-selected="false">Lab Report Hematology Sec</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#labthree" role="tab" aria-controls="Three" aria-selected="false">Lab Report Blood Chem</a>
                            </li>
                        </ul>
                </div>
            
        <div class="card-body">
            <div class="container register"  style="margin-left: 7%">
                <div class="row">
                    <div class="tab-content" id="myTabContent">

                    
                            <!---end of lab c-->
                    </div>
                </div>
            </div>
        </div>
    </div>   
@stop