@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        Computers PAGE
    </div>

    <div>
        <ul>
            @foreach($computers as $computer)

            <a href="{{route('computers.show', ['computer' => $computer['id']]) }}">
                <li>
                    {{$computer['name']}} is form <strong> {{$computer['country']}}</strong>
                </li>
            </a>

            @endforeach
        </ul>
    </div>
    @endsection