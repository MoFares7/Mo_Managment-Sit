@extends('layout')
@section('title', 'Show Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers</h1>
    </div>

    <div class="mt-8">
        <h3>{{$computer['name']}} is form <strong> {{$computer['country']}}</strong></h3>
    </div>
    @endsection