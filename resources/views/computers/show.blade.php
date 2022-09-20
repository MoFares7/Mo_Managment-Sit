@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        Computers PAGE
    </div>

    <div class="mt-8">
        <h3>{{$computer['name']}}</h3>
    </div>
    @endsection

    @section('title','about')