<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Brian Reynes Portfolio</a>
            <div class="d-flex flex-wrap gap-2">
                <a class="btn btn-outline-light btn-sm" href="{{ route('home') }}">Home</a>
                <a class="btn btn-outline-light btn-sm" href="{{ route('skills') }}">Skills</a>
                <a class="btn btn-outline-light btn-sm" href="{{ route('projects') }}">Projects</a>
                <a class="btn btn-outline-light btn-sm" href="{{ route('experience') }}">Experience</a>
                <a class="btn btn-outline-light btn-sm" href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        @yield('content')
    </div>

</body>
</html>