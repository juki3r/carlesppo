<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carles PPO</title>

    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-cover {
            background: url('{{ asset('images/bg.jpg') }}') center center / cover no-repeat;
            height: 100vh;
            position: relative;
        }

        .bg-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55); /* dim effect */
        }

        .content-center {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>

    <div class="bg-cover d-flex align-items-center justify-content-center text-center">
        <div class="bg-overlay"></div>

        <div class="content-center px-3">
            <h3 class="text-white fw-bold">
                Provincial Population Office
            </h3>
        </div>
    </div>

</body>
</html>
