@extends('layout')
@section('title', 'Show Computer')

@section('content')
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    nav a {
        padding: .5rem;
    }

    .edit-but {
        color: blue;
        border: 1px solid #ddd;
        padding: 10px 25px;
        font-size: .8rem;
        text-decoration: underline;
        margin: 10px 0;
        border-radius: 5px;
    }

    .delete-but {
        color: red;
        border: 1px solid #ddd;
        padding: 10px 25px;
        font-size: .8rem;
        text-decoration: underline;
        margin: 10px 0;
        border-radius: 5px;
    }
</style>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>This All Products</h1>
    </div>

    <div class="mt-8">
        <p> {{$computer['name']}} ( {{$computer['origin']}} ) <strong> {{$computer['price']}}</strong></p>

        <a class="edit-but" href="{{(route('computers.edit', $computer->id))}}">Edit</a>

        <form action="{{(route('computers.destroy', $computer->id))}}" , method="POST">
            @csrf
            @method('DELETE')
            <input class="delete-but" , type="submit" , value="delete">
        </form>

    </div>




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
            <h1>Create a new Products</h1>
        </div>
        <div class="flex justify-center">
            <form action="{{route('computers.store')}}" , method="post">
                @csrf
                <div>
                    <label for="computer-name">Products Name</label>
                    <input id="computer-name" name="computer-name" value="{{old('computer-name')}}" type="text">

                    @error('computer-name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <div>
                    <label for="computer-origin">Products Origin</label>
                    <input id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}" type="text">
                    @error('computer-origin')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <label for="computer-price">Products Price</label>
                    <input id="computer-price" name="computer-price" value="{{old('computer-price')}}" type="text">
                    @error('computer-price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit">Create</button>
                </div>
            </form>

        </div>

        @endsection
        @endsection