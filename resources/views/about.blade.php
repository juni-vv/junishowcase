@extends('layouts.app')

@section('title', 'About Me')

@section('content')
    <div class="row">

        <div class="row">
            <div class="col-md-6" id="text-column">
                <h1>About me</h1>
                <p>Hi there! I'm <strong>Juniper</strong>, a {{ $age }}-year-old that writes code sometimes based
                    in the Netherlands.</p>
                <p>I like to program all sorts of things, from games and mods to weird experimental stuff like route
                    diagrams and PDF generators.</p>

                <h3>Areas of expertise</h3>
                <ul>
                    <li>Java</li>
                    <li>PHP and Laravel</li>
                    <li>Flutter</li>
                    <li>C++ with OpenGL</li>
                </ul>
            </div>
            <div class="col-md-6" id="img-column"
                style="background-image: url('{{ asset('images/profile.png') }}'); 
                background-size: contain; 
                background-repeat: no-repeat; 
                background-position: top; 
                min-height: 1px;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Other skills</h3>
                <ul>
                    <li>Modding games</li>
                    <li>Making websites</li>
                    <li>Anything Minecraft-related (mods, plugins, etc)</li>
                </ul>
            </div>

            <p>I program here and there whenever I have time. It makes me happy to see my silly little fingers clicking
                buttons
                turn into something cool.</p>

            <h3>Projects & Tools</h3>
            <p>My top projects are on the <a href="{{ url('/') }}">homepage</a>!</p>
            <p>I use VS Code and make things on a whim :]</p>

            <div class="col-md-12">
                <h3>Fun facts</h3>
                <ul>
                    <li>I also like music</li>
                    <li>Urban planning nerd</li>
                </ul>
            </div>

            <h3>Contact me</h3>
            <p>You can email me at <a href="mailto:jvdvelde2005@gmail.com">jvdvelde2005@gmail.com</a> or use the contact
                form
                below:</p>
        </div>

        <form action="{{ url('/contact') }}" method="POST" class="mb-4">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Your email"
                        required>
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" rows="3" class="form-control" placeholder="Say hi!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

@endsection
