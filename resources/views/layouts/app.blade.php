<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Projects')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #05030a;
            color: #eee;
        }

        a {
            color: #a0c4ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            padding-top: 2rem;
        }

        footer {
            margin-top: 4rem;
            text-align: center;
            font-size: 0.9rem;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Juniper
    </footer>
</body>

</html>
