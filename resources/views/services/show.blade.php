@extends('layouts.app')

@section('content')
    Show {{ $service }}
    <br>
    <a href="{{ route('services.index') }}">Back to Index</a>
@endsection


