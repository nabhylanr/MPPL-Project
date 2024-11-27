<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Tickets</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">
    @include('navbar')

    <div class="max-w-screen-xl mx-auto px-4 py-12 pt-32 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <img src="img/poster.jpeg" alt="Poster REEVA" class="rounded-lg shadow-lg">
            <div class="mt-10 text-gray-700 text-sm leading-relaxed">
            <p>
                <strong>Schematics Revolutionary Entertainment and Expo with Various Arts (REEVA)</strong> merupakan salah satu rangkaian acara 
                <strong>Schematics 2024</strong>. Schematics REEVA bertujuan menjadi wadah untuk memfasilitasi dalam mengenalkan sub-acara Schematics 2024. 
                Konsep yang diusung kali ini berbeda dengan tahun sebelumnya, menjadi angin baru sebagai salah satu Big-Event di ITS. Berbekal pengalaman yang 
                kompleks, mengusung konsep baru sebagai rencana yang lebih berkelanjutan kepada kegiatan di tahun selanjutnya.
            </p>
            <p class="text-gray-700 text-sm leading-relaxed mt-4">
                Schematics REEVA 2024 menghadirkan Exhibition, Festival, dan Cosplay. Mengusung tema <strong>“Beyond Flesh and Steel”</strong>, acara ini 
                memperkenalkan sisi lain dari sebuah mesin, yakni Artificial Intelligence, yang ramai diperbincangkan. Di sini, pengunjung dapat melihat bagaimana 
                manusia dan AI berkolaborasi dalam revolusi digital. Seluruh pertanyaan akan terjawab pada REEVA 2024. 
                <strong>Dapatkan COMPONENT-mu sekarang!</strong>
            </p>
            </div>

            <div class="mt-10">
                <h2 class="text-blue-700 font-bold text-xl">Syarat & Ketentuan</h2>
    
                <div class="mt-6">
                    <h3 class="text-gray-900 font-bold text-2xl">DO'S</h3>
                    <ol class="list-decimal pl-5 mt-2 text-gray-700 text-sm">
                        <li><strong>Membawa tiket gelang.</strong></li>
                        <li><strong>Memakai pakaian yang nyaman</strong> sesuai dengan tema festival.</li>
                        <li><strong>Tiba tepat waktu</strong> agar tidak ketinggalan acara utama.</li>
                        <li><strong>Diwajibkan membawa STNK.</strong></li>
                        <li>Membawa <strong>uang tunai/non-tunai</strong> yang cukup untuk belanja di food bazar dan merchandise.</li>
                        <li><strong>Dukung band dan drama musical</strong> yang tampil di panggung dengan cara yang sopan dan tertib.</li>
                    </ol>
                </div>

                <div class="mt-6">
                    <h3 class="text-gray-900 font-bold text-2xl">DON'TS</h3>
                    <ol class="list-decimal pl-5 mt-2 text-gray-700 text-sm">
                        <li>Dilarang membawa <strong>makanan dan minuman dari luar</strong> karena sudah tersedia food bazar di dalam venue.</li>
                        <li>Dilarang <strong>merokok, menggunakan rokok elektrik (vape), dan berbagai jenis perangkat elektronik</strong> seperti pod di area acara.</li>
                        <li>Dilarang membawa <strong>benda tajam dan/atau senjata api.</strong></li>
                        <li>Dilarang membawa atau mengonsumsi <strong>alkohol dan/atau narkoba</strong> di area festival.</li>
                        <li>Dilarang membawa <strong>hewan peliharaan</strong> ke dalam area festival.</li>
                        <li>Dilarang membawa <strong>drone</strong> tanpa izin resmi.</li>
                        <li>Dilarang membawa dan menggunakan <strong>laser pointer</strong> atau alat yang dapat mengganggu pertunjukan.</li>
                        <li>Dilarang membawa <strong>speaker portabel atau alat penguat suara</strong> lainnya tanpa izin.</li>
                        <li>Dilarang <strong>membuang sampah sembarangan,</strong> jagalah kebersihan area festival.</li>
                        <li>Dilarang menimbulkan kerusuhan atau <strong>moshing</strong> yang berpotensi melukai orang lain.</li>
                        <li>Dilarang membawa <strong>smoke bomb, flare,</strong> atau alat yang dapat menyebabkan gangguan.</li>
                        <li>Dilarang <strong>merusak dekorasi</strong> dan sarana prasarana festival.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Schematics REEVA 2024</h2>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-blue-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 0v4M3 11h18M5 19h14M9 15h6" />
                        </svg>
                        17 November 2024
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-blue-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21v-8m-4 4v-4h7v4m5 0v-4m0-8H9m-5 8V6m16 4h2" />
                        </svg>
                        08:00 - 21:00 WIB
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-blue-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7V3m-8 4V3m-7 8h18M5 21h14M9 15h6" />
                        </svg>
                        ITS Robotics Center, Jawa Timur
                    </li>
                </ul>
                <div class="mt-6">
                    <p class="text-sm text-gray-500">Diselenggarakan oleh</p>
                    <h3 class="text-lg font-bold text-gray-900">Schematics ITS 2024</h3>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg mt-6">
                <p class="text-gray-900 text-sm mb-4">
                    Kamu belum membeli tiket. Silakan pilih lebih dulu di tab menu TIKET.
                </p>
                <a href="/buy" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Beli Tiket
                </a>
            </div>
        </div>
    </div>
</body>
