<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Projects')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: radial-gradient(circle at 20% 30%, #1a102d, #05030a 70%);
        }

        .navbar {
            background: rgba(14, 10, 25, 0.8) !important;
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(170, 150, 220, 0.22);
            border-radius: 0 0 18px 18px;
            box-shadow:
                0 4px 20px rgba(120, 100, 180, 0.25),
                inset 0 0 25px rgba(100, 80, 160, 0.06);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            color: #dec8ff !important;
            font-weight: 600;
            letter-spacing: 0.5px;
            font-size: 1.15rem;
            text-shadow: 0 0 6px rgba(190, 150, 255, 0.4);
            transition: transform 0.25s ease, text-shadow 0.25s ease;
        }

        .navbar-brand:hover {
            transform: translateY(-1px);
            text-shadow: 0 0 10px rgba(210, 180, 255, 0.6);
            text-decoration: none;
        }

        .nav-link {
            color: #b8a6ff !important;
            font-weight: 500;
            border-radius: 14px;
            padding: 8px 14px;
            transition:
                background-color 0.25s ease,
                box-shadow 0.25s ease,
                color 0.25s ease;
        }

        .nav-link:hover {
            background-color: rgba(140, 120, 220, 0.2);
            color: #e4d6ff !important;
            box-shadow:
                0 0 10px rgba(160, 140, 240, 0.35),
                inset 0 0 6px rgba(255, 255, 255, 0.1);
        }

        .navbar-nav .nav-link.active {
            background-color: rgba(200, 160, 255, 0.25);
            color: #ffffff !important;
            font-weight: 600;
            box-shadow:
                0 0 12px rgba(180, 140, 240, 0.5),
                inset 0 0 6px rgba(255, 255, 255, 0.15);
            text-shadow: 0 0 8px rgba(210, 170, 255, 0.7);
        }

        .navbar::after {
            content: "";
            position: absolute;
            left: 12%;
            right: 12%;
            bottom: -2px;
            height: 2px;
            background: linear-gradient(90deg,
                    transparent,
                    rgba(200, 160, 255, 0.7),
                    transparent);
            filter: blur(2px);
            opacity: 0.6;
            animation: twilightShimmer 7s ease-in-out infinite;
        }

        @keyframes twilightShimmer {
            0% {
                transform: translateX(-60%);
            }

            50% {
                transform: translateX(60%);
            }

            100% {
                transform: translateX(-60%);
            }
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
        }


        .content {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    @php
        $showNavbar = $showNavbar ?? true;
    @endphp

    @if ($showNavbar)
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Juniper van der Velde</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                    aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="color:#dec8ff;">☰</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="{{ url('/downloads') }}">Downloads</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif

    <div class="container content">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Juniper
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
