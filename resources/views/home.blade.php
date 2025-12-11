@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <style>
        body {
            background: linear-gradient(135deg, #ffb3c1, #ffc3a0, #ffe680);
            color: #3a0ca3;
            font-family: 'Comic Sans MS', 'Chalkboard', sans-serif;
            overflow-x: hidden;
            position: relative;
            min-height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        /* floating sparkles + hearts */
        .floaty {
            position: absolute;
            pointer-events: none;
            animation: floaty 6s infinite linear;
            font-size: 1.2rem;
            overflow: hidden;
        }

        @keyframes floaty {
            0% {
                transform: translateY(0) rotate(0);
                opacity: 0.6;
            }

            50% {
                transform: translateY(-50px) rotate(15deg);
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(30deg);
                opacity: 0;
            }
        }

        h1 {
            text-shadow: 2px 2px #fff;
            transition: transform .3s ease-in-out;
        }

        h1:hover {
            transform: rotate(-1deg) scale(1.05);
        }

        a {
            color: #ff69b4;
            font-weight: bold;
            transition: all .3s ease;
        }

        a:hover {
            color: #ffb347;
            text-shadow: 0 0 6px #fff, 0 0 8px #ff69b4;
        }

        /* Card styling */
        .cute-card {
            background: rgba(255, 255, 255, 0.45);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 8px 18px rgba(255, 105, 180, 0.3);
            border: 2px dashed #ff69b4;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .cute-card:hover {
            transform: translateY(-8px) rotate(-2deg);
            box-shadow: 0 10px 26px rgba(255, 105, 180, 0.5);
        }

        .cute-btn {
            background: linear-gradient(90deg, #ff69b4, #ffb347);
            border: none;
            border-radius: 15px;
            padding: 8px 16px;
            font-weight: bold;
            color: #fff;
            box-shadow: 0 5px 14px rgba(255, 105, 180, 0.4);
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .cute-btn:hover {
            transform: scale(1.15) rotate(-5deg);
            box-shadow: 0 5px 18px rgba(255, 105, 180, 0.6);
        }
    </style>

    <div class="row justify-content-center" style="max-width: 1920px; margin:auto;">

        {{-- floating sparkles + hearts --}}
        @for ($i = 0; $i < 18; $i++)
            <div class="floaty"
                style="
                left: {{ rand(0, 95) }}vw;
                top: {{ rand(0, 90) }}vh;
                animation-delay: {{ rand(0, 5) }}s;
                font-size: {{ rand(14, 28) }}px;
            ">
                {{ rand(0, 1) ? '✨' : '❤️' }}
            </div>
        @endfor

        <h1 class="mb-4 text-center">My Sparkly Projects</h1>

        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-md-4 mb-4 d-flex">
                    <div class="cute-card w-100">
                        <h3 style="color:#c1126b;">{{ $project['name'] }}</h3>

                        <p style="color:#6a00a3;">
                            {{ $project['description'] }}
                        </p>

                        <a href="{{ $project['link'] }}" class="cute-btn">
                            Peek! ✨
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
