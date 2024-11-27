<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

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

        body {
            margin: 0;  
            padding: 0;
            overflow-x: hidden;
            scroll-behavior: smooth; 
        }
    </style>
</head>
<body class="min-h-screen bg-cover bg-center" 
      style="background-image: url('{{ asset('img/dashboard.png') }}'); 
             background-size: cover; 
             background-position: center center; 
             background-attachment: scroll;">

    @include('navbar')

    <div class="absolute top-0 left-0 w-full h-full flex flex-col items-center justify-center text-center">
        <h1 class="text-[50px] font-bold text-[#342473] mb-4"
            style="font-family: 'LemonMilkBold', sans-serif; line-height: 1.25; letter-spacing: 1%;"
            data-aos="fade-up" data-aos-delay="500">
            REVOLUTIONARY <br>
            ENTERTAINMENT AND<br>
            EXPO WITH VARIOUS ARTS
        </h1>

        <div class="flex items-center justify-center w-full mt-4 px-4" data-aos="fade-up" data-aos-delay="500">
            <div class="flex-grow h-[1px] bg-[#342473] mr-2"></div>
            <p class="text-[18px] text-[#342473]" 
               style="font-family: 'LemonMilkRegular', sans-serif; line-height: 1.25; letter-spacing: 1%;">
                Schematics REEVA 2024
            </p>
            <div class="flex-grow h-[1px] bg-[#342473] ml-2"></div>
        </div>
    </div>

    <div class="relative mt-[950px] text-left pl-[700px]" data-aos="fade-up" data-aos-delay="100">
        <p class="text-[45px] text-white" 
           style="font-family: 'LemonMilkBold', sans-serif;">
            SENI
        </p>
        <p class="text-white">
            REEVA Exhibition menghadirkan pameran seni dengan konsep unik dan modern, menampilkan keindahan seni dalam berbagai medium yang memukau. Setiap instalasi dirancang untuk menciptakan ruang apresiasi yang dinamis dan interaktif, memberikan pengalaman visual yang tak terlupakan bagi pengunjung.
        </p>
    </div>
</body>

<script>
    AOS.init({
        offset: 200,      
        delay: 100,       
        duration: 1200,  
        easing: 'ease-in-out', 
        once: false,      
        mirror: true      
    });
</script>
</html>