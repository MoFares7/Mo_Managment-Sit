@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <link rel="stylesheet" href="css/style.css">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>Create a new Computer</h1>
    </div>
    <div class="flex justify-center">
        <form action="" , method="post">
            <div>
                <label for="computer-name">Computer Name</label>
                <input id="computer-name" name="computer-name" type="text">
            </div>
            <div>
                <label for="computer-origin">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" type="text">
            </div>
            <div>
                <label for="computer-price">Computer Price</label>
                <input id="computer-price" name="computer-price" type="text">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

    </div>

    @endsection

    @section('title','about')