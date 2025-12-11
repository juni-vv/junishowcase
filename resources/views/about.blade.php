@extends('layouts.app')

@section('title', 'Rawr! I am Juniper :3')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #ffb3c1, #ffc3a0, #ffe680);
            color: #3a0ca3;
            font-family: 'Comic Sans MS', 'Chalkboard', sans-serif;
            overflow-x: hidden;
            position: relative;
        }

        .floaty {
            position: absolute;
            pointer-events: none;
            animation: floaty 6s infinite linear;
            font-size: 1.2rem;
        }

        @keyframes floaty {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.7;
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

        h1,
        h3 {
            text-shadow: 2px 2px #fff;
            transition: transform 0.3s ease-in-out;
        }

        h1:hover,
        h3:hover {
            transform: rotate(-0.5deg) scale(1.05);
        }

        a {
            color: #ff69b4;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #ffb347;
            text-decoration: underline;
            text-shadow: 0 0 5px #fff, 0 0 10px #ff69b4;
        }

        #text-column {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        #img-column {
            background-image: url('{{ asset('images/profile.png') }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 300px;
            border-radius: 50%;
            box-shadow: 0 0 20px #ff69b4 inset;
            transition: transform 0.3s ease;
            animation: sparkle 2s infinite alternate;
        }

        #img-column:hover {
            transform: rotate(-10deg) scale(1.05);
        }

        @keyframes sparkle {
            0% {
                box-shadow: 0 0 20px #ff69b4 inset;
            }

            50% {
                box-shadow: 0 0 35px #ffe680 inset;
            }

            100% {
                box-shadow: 0 0 20px #ff69b4 inset;
            }
        }

        ul {
            list-style: '🦊 ';
        }

        ul li:hover {
            color: #ff69b4;
            text-shadow: 0 0 5px #ffe680;
            transform: scale(1.1);
            transition: all 0.2s ease;
        }

        button {
            background: linear-gradient(90deg, #ff69b4, #ffb347);
            border: none;
            border-radius: 15px;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        button:hover {
            transform: scale(1.15) rotate(-5deg);
            box-shadow: 0 5px 15px rgba(255, 105, 180, 0.5);
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.4);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        input:focus,
        textarea:focus {
            border-color: #ff69b4;
            box-shadow: 0 0 8px #ffb347;
            outline: none;
            transition: all 0.2s ease;
        }

        #e {
            position: fixed;
            bottom: 10px;
            right: 10px;
            font-size: 1.5rem;
            opacity: 0;
            cursor: pointer;
            transition: opacity 0.3s ease, transform 0.3s ease;
            z-index: 9999;
        }

        #e:hover {
            opacity: 1;
            transform: scale(1.5) rotate(20deg);
        }
    </style>

    @for ($i = 0; $i < 20; $i++)
        <div class="floaty"
            style="
        left: {{ rand(0, 95) }}vw; 
        top: {{ rand(0, 90) }}vh; 
        animation-delay: {{ rand(0, 5) }}s;
        font-size: {{ rand(14, 28) }}px;">
            @if (rand(0, 1))
                ✨
            @else
                ❤️
            @endif
        </div>
    @endfor

    <div class="row justify-content-center" style="max-width: 1920px; margin:auto;">

        <audio id="rawr-audio" src="{{ asset('sounds/rawr.wav') }}"></audio>

        <div class="col-md-6" id="text-column">
            <h1 class="user-select-none"><span id="rawr">Rawr!</span> I'm <strong>Juniper</strong> :3</h1>
            <p>I'm a {{ $age }}-year-old fox creature who types code with sparkles in my paws ✨</p>
            <p>I make games, mods, route diagrams, PDFs, and weird adorable things just for fun! Waff waff~ :3</p>

            <h3>My Superpowers</h3>
            <ul>
                <li>Java magic 🧙‍♂️</li>
                <li>PHP & Laravel enchantments 🐘</li>
                <li>Flutter flutters 🦋</li>
                <li>C++ with OpenGL wizardry ✨</li>
            </ul>
        </div>

        <div class="col-md-6" id="img-column"></div>

        <div class="col-md-12" style="margin-top: 20px;">
            <h3>Other Fun Skills</h3>
            <ul>
                <li>Modding games like a sneaky fox :3</li>
                <li>Making websites that sparkle 🌈</li>
                <li>Anything Minecraft, because blocks are life :D !!</li>
            </ul>

            <p>I program when my paws feel inspired. Seeing my clicks turn into magic makes me happy :3</p>

            <h3>Projects & Tools</h3>
            <p>Check my shiny creations in the <a href="{{ url('/') }}">future</a>! ✨</p>
            <p>VS Code is my magic wand hehe. I craft whimsical things on a whim!</p>

            <h3>Fun Facts About Me</h3>
            <ul>
                <li>Music lover 🎵</li>
                <li>Urban planning nerd 🏙️</li>
            </ul>

            <h3>Contact this cute fox</h3>
            <p>Email me at <a href="mailto:jvdvelde2005@gmail.com">jvdvelde2005@gmail.com</a> or say hi below! 🦊</p>

            <form class="contact-form mb-4">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your name :>" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control"
                            placeholder="Your email @@@@@" required>
                    </div>
                </div>
                <textarea name="message" rows="4" class="form-control mb-3" placeholder="Say hi! Rawrr~ :3"></textarea>
                <button type="submit">✨Send itttt✨</button>
            </form>

            <div>
                <h4 id="e" onclick="window.location='{{ url('/fox') }}'">🐾</h4>
            </div>
        </div>
    </div>

    <script>
        const sound = document.getElementById('rawr-audio');
        const trigger = document.getElementById('rawr');

        trigger.addEventListener('click', () => {
            sound.currentTime = 0;
            sound.play();
        });
    </script>
@endsection
