<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Laravel Demo')</title>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #121212; /* very dark background */
            color: #f0f0f0; /* light text */
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            padding: 3rem 1rem;
        }
        h1, h2, h3, h4, h5 {
            color: #FFC107; /* bright yellow */
            font-weight: 600;
        }
        a.btn-outline-primary {
            color: #FFC107;
            border-color: #FFC107;
        }
        a.btn-outline-primary:hover {
            background-color: #FFC107;
            color: #121212;
        }
        a.btn-outline-success {
            color: #FFEB3B; /* lighter yellow */
            border-color: #FFEB3B;
        }
        a.btn-outline-success:hover {
            background-color: #FFEB3B;
            color: #121212;
        }
        .btn-primary {
            background-color: #FFC107;
            border-color: #FFC107;
            color: #121212;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #FFB300;
            border-color: #FFB300;
            color: #121212;
        }
        form.bg-white {
            background-color: #1e1e1e !important; /* dark form background */
            color: #f0f0f0;
        }
        label.form-label {
            color: #FFC107;
            font-weight: 600;
        }
        input.form-control, textarea.form-control {
            background-color: #2c2c2c;
            border: 1px solid #444;
            color: #f0f0f0;
        }
        input.form-control:focus, textarea.form-control:focus {
            background-color: #2c2c2c;
            border-color: #FFC107;
            color: #fff;
            box-shadow: 0 0 5px #FFC107;
        }
        .container {
            max-width: 900px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        @yield('content')
    </div>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('script')
</body>
</html>