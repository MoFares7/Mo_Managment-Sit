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
</style>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>This All Computers</h1>
    </div>

    <div class="mt-8">
        <p> {{$computer['name']}} ( {{$computer['origin']}} ) <strong> {{$computer['price']}}</strong></p>

        <a class="edit-but" href="{{(route('computers.edit', $computer->id))}}">Edit</a>
    </div>
    @endsection