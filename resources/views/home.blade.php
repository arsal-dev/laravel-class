{{-- <h1>Welcome, {{ $name }}</h1> --}}

{{-- @if (1 == 2)
    <h1>True</h1>
@endif --}}



@extends('layouts.main')

@section('title', 'home page')

@section('main-section')
    <h1>home page!</h1>
    @for ($i = 0; $i < count($data); $i++)
        <ul>
            <li>{{ $data[$i] }}</li>
        </ul>
    @endfor
@endsection

{{-- 
@php
    1 == 1
@endphp --}}
