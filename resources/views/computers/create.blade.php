@extends('layout')
@section('title', 'Create')

@section('content')
<div class="max-w-6xl mx-auto ">
    <div class="flex justify-center ">
        <h1>Create a new Computer</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{route('computers.store')}}" , method="post">
            @csrf
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