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

        /* Hero container */
        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        /* Background image (NO BLUR on mobile) */
        .hero img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
        }

        /* Dark overlay */
        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        /* Centered content */
        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1rem;
        }

        /* Responsive text */
        .hero-content h3 {
            color: #fff;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: clamp(1.4rem, 4vw, 2.2rem);
        }
    </style>
</head>
<body>

    <div class="hero">
        <!-- High-resolution image -->
        <img src="{{ asset('images/bg.jpg') }}" alt="Background">

        <!-- Dim overlay -->
        <div class="overlay"></div>

        <!-- Centered text -->
        <div class="hero-content">
            <h3>Provincial Population Office</h3>
        </div>
    </div>

</body>
</html>
