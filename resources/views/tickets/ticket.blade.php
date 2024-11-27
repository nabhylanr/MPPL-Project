<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @font-face {
            font-family: 'LemonMilkBold';
            src: url('/fonts/LEMONMILK-Bold.otf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }
        @font-face {
            font-family: 'LemonMilkRegular';
            src: url('/fonts/LEMONMILK-Regular.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/Poppins.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>
<body class="min-h-screen bg-cover bg-center">
    @include('navbar')

    <div class="relative">
        <img src="img/poster.jpeg" alt="Poster REEVA" class="absolute top-20 left-10" style="width: 800px; height: auto;">
    </div>
</body>
</html>