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
        html, body {
            height: 100%;
            margin: 0;
        }

        .sec {
            position: relative;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
        }

        /* Sharp background image */
        .sec img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* Dark overlay */
        .dimmer {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1;
        }

        /* Top content container */
        .content-top {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 1.2rem;
            text-align: center;
        }

        .content-top h3 {
            color: #fff;
            font-weight: 700;
            font-size: clamp(1.3rem, 4vw, 2.2rem);
            letter-spacing: 1px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <div class="sec">
        <img src="{{ asset('images/bg.jpg') }}" alt="Background">

        <div class="dimmer"></div>

        <!-- H3 at TOP -->
        <div class="content-top">
            <h3 class="mb-0 p-0">Provincial Population Office ( PPO )</h3>
            <h6 class="mt-2 p-0 text-light" style="font-weight: 400">Carles, Iloilo 5019</h6>
        </div>
    </div>

</body>
</html>
