@extends('layouts.app')

@section('title', 'You found us!')
@php($showNavbar = false)

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #ffb3c1, #ffc3a0, #ffe680);
            color: #3a0ca3;
            font-family: 'Comic Sans MS', 'Chalkboard', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow-x: hidden;
        }

        h2 {
            text-shadow: 2px 2px #fff;
            margin-bottom: 20px;
        }

        #fox-image {
            max-width: 300px;
            width: 80%;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
    </style>

    <h2>rawr! you found us :3</h2>
    <img id="fox-image" src="{{ asset('images/foxes.jpeg') }}" alt="Fox">
@endsection
