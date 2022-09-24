@extends('layout')
@section('title', 'Computers')

@section('content')
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
<div class="max-w-6xl mx-auto ">
    <div class="flex justify-center ">
        <h1>Edit on old Computer</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{route('computers.store')}}" , method="post">
            @csrf
            <div>
                <label for="computer-name">Computer Name</label>
                <input id="computer-name" name="computer-name" value="{{$computer->name}}" type="text">

                @error('computer-name')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div>
                <label for="computer-origin">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" value="{{$computer->origin}}" type="text">
                @error('computer-origin')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div>
                <label for="computer-price">Computer Price</label>
                <input id="computer-price" name="computer-price" value="{{$computer->price}}" type="text">
                @error('computer-price')
                <div class="form-error">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

    </div>

    @endsection