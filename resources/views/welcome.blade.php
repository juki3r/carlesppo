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

        /* Sharp image (NO BLUR) */
        .sec img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;   /* important */
            object-position: center;
        }

        /* Dim overlay */
        .dimmer {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        /* Centered text */
        .content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1rem;
        }

        .content h3 {
            color: #fff;
            font-weight: 700;
            font-size: clamp(1.4rem, 4vw, 2.3rem);
            letter-spacing: 1px;
        }
    </style>
</head>

<body>

    <div class="sec">
        <img src="{{ asset('images/bg.jpg') }}" alt="Background">

        <div class="dimmer"></div>

        <div class="content">
            <h3>Provincial Population Office</h3>
        </div>
    </div>

</body>
</html>
