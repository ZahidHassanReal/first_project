@extends('master')

@section('content')

@for ($index = 0; $index <5; $index++)
{{ $services[$index] }} <br>

@endfor

@endsection












{{-- <p>{{ $service_id }}</p> --}}
