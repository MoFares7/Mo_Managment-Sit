@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        This All Products Founded
    </div>
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    nav a {
        padding: .5rem;
    }

    form {
        background: white;
        border: 1px solid #dddddd;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px #0000000f;
    }

    form div {
        margin: 10px;
    }

    form input {
        border: 1px solid #dddddd;
        padding: 10px;
        border-radius: 5px;
        font-size: 1.2rem;
        font-family: 'Nunito';
    }

    form label {
        display: inherit;
        font-size: .9rem;
        padding-bottom: 3px;
        color: #9d9d9d;
    }

    form button {
        border: 1px solid #ddd;
        padding: 10px 25px;
        font-size: 1.1rem;
        margin: 10px 0;
        border-radius: 5px;
    }

    .form-error {
        margin: 0;
        font-size: .8rem;
        color: red;
    }
</style>
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