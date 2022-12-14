@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        This All Products Founded
    </div>

    <div>
        <ul>
            @foreach($computers as $computer)

            <a href="{{route('computers.show', ['computer' => $computer['id']]) }}">
                <li>
                    <p> {{$computer['name']}} ( {{$computer['origin']}} ) <strong> {{$computer['price']}}</strong></p>
                </li>
            </a>

            @endforeach
        </ul>
    </div>
    @endsection