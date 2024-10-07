<?php 

$cardsData = file_get_contents('./pages/data/card.json'); 
$cards = json_decode($cardsData, true);

// $offlineClass = array_filter($cards, function($item){
//     return $item['type'] === 'Offline';
// });
// var_dump($offlineClass);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Rupa Raya Academy</title>


</head>

<body>

    <a href="https://api.whatsapp.com/send?phone=+6285242673019&amp;text=Halo saya mau bertanya tentang Rupa Raya Academy"
        class="float" target="_blank">
        <i class="fa fab fa-whatsapp mt-3.5"></i>
    </a>

    <!-- NAVIGATION BAR START =============== -->
    <!-- NAVIGATION BAR START =============== -->
    <!-- NAVIGATION BAR START =============== -->
    <?php include_once __DIR__ . "/pages/sections/navbar.php" ?>
    <!-- NAVIGATION BAR END =============== -->
    <!-- NAVIGATION BAR END =============== -->
    <!-- NAVIGATION BAR END =============== -->

    <header class="">
        <div class="lg:h-fit h-[50vh] relative overflow-hidden centered-xy">
            <img class="img-cover object-top -z-10" src="./assets/program/bg-class.png" alt="">
            <div class="max-w-[575px] absolute z-20 text-white text-center">
                <h3 class="md:text-4xl text-[32px] font-semibold mb-4" data-aos="fade-up" data-aos-once="true"
                    data-aos-duration="1100">Kursus/Kelas</h3>
                <h3 data-aos="fade-up" data-aos-duration="1500" data-aos-once="true"><a href="#">Beranda > </a><a
                        href="#" class="text-[#EDC423]">Kursus/Kelas</a></h3>
            </div>
        </div>
    </header>

    <!-- SECTION 4 CARD CLASS START ======= -->
    <!-- SECTION 4 CARD CLASS START ======= -->
    <!-- SECTION 4 CARD CLASS START ======= -->
<<<<<<< HEAD
    <section class="flex flex-col my-10">
        <div class="flex items-center justify-between mx-16 max-md:mx-6 max-lg:flex-wrap">
            <div>
                <h2 class="z-10 mt-0 text-3xl font-extrabold text-slate-700">
                    <span class="text-[#273F5A]">Daftar</span>
                    <span class="text-[#5386C0]">Kursus/Kelas</span>
                </h2>
                <p class="mt-3 text-base text-neutral-500">
                    Pilih Kursus/Kelas Yang Anda Butuhkan Untuk Belajar
                </p>
            </div>
            <div class="flex gap-5 max-lg:mt-10 mb-5 max-md:flex-wrap max-md:mt-5 max-md:mb-0 max-md:gap-x-3">
                <div class="btnn">
                    <a onclick="showAllClasses()"
                        class="btn-bg btn-paket btn-bg-click py-2 px-4 text-[#5386C0] rounded-md cursor-pointer border border-[#5386C0]">Semua
                        Kelas</a>
                </div>
                <div>
                    <a onclick="filterClasses('offline')"
                        class="btn-bg btn-paket py-2 px-4 text-[#5386C0] rounded-md cursor-pointer border border-[#5386C0] ">Kelas
                        Offline</a>
                </div>
                <div class="max-md:mt-3">
                    <a onclick="filterClasses('online')"
                        class="btn-bg btn-paket py-2 px-4 text-[#5386C0] rounded-md cursor-pointer border border-[#5386C0]">Kelas
                        Online</a>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap gap-4 items-stretch justify-center self-stretch mt-10 max-md:mt-10">



            <!-- Card UI/UX Design Mobile App Offline -->
            <!-- Card UI/UX Design Mobile App Offline -->
            <!-- Card UI/UX Design Mobile App Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow bg-white rounded-2xl shadow-xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="./assets/pg1/banner-uiux.jpg"
                    alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">14 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385"
                        alt="" />
                    <a href="./pages/detailclass-uiux.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">UI/UX
                        Design Mobile App</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar mengenal dasar UI/UX, Hands-on
                        Experience, Networking Opportunites. Cocok untuk pemula.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor-uiux.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Abd. Rahim Saleh</p>
                        <p class="relative text-sm leading-5 text-neutral-600">UI/UX Designer at Kalla</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <p class="text-2xl text-white">Gratis</p>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeMPhFRoiJwAu1-sWDk6QjSWMK6_UBkVwHxaolK__sbkRn0Ew/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card UI/UX Design Mobile App Offline -->
            <!-- Card UI/UX Design Mobile App Offline -->
            <!-- Card UI/UX Design Mobile App Offline -->



            <!-- Card 3D Architectural Rendering Offline -->
            <!-- Card 3D Architectural Rendering Offline -->
            <!-- Card 3D Architectural Rendering Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy"
                    src="./assets/pg1/banner-3darchitectural.jpg" alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">18 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-3darchitectural.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">3D
                        Architectural Rendering</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar dasar rendering arsitektur 3D
                        dengan tools profesional. Hands-on practice dan cocok untuk pemula.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor-uiux.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Abd. Rahim Saleh</p>
                        <p class="relative text-sm leading-5 text-neutral-600">UI/UX Designer at Kalla</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <p class="text-2xl text-white">Rp. 899.000</p>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScWQS2TQw8ZG3zEOZ57wRKU5pg-BVj5zT-NS4kae-MesmSRlg/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card 3D Architectural Rendering Offline -->
            <!-- Card 3D Architectural Rendering Offline -->
            <!-- Card 3D Architectural Rendering Offline -->



            <!-- Card Speaking Communication English Offline -->
            <!-- Card Speaking Communication English Offline -->
            <!-- Card Speaking Communication English Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="./assets/pg1/banner-english.jpg"
                    alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">20 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-english.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">Speaking
                        Communication English</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Kuasi komunikasi bahasa Inggris
                        sehari-hari dengan percaya diri! Tingkatkan kemampuan speaking-mu</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 349.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSctbqpgJr0QnP4NropL9zOSJQyGtUUpJZ2o9c8xMdr5SY2ocg/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card Speaking Communication English Offline -->
            <!-- Card Speaking Communication English Offline -->
            <!-- Card Speaking Communication English Offline -->



            <!-- Card 3D Modelling Product & Photoshoot Offline -->
            <!-- Card 3D Modelling Product & Photoshoot Offline -->
            <!-- Card 3D Modelling Product & Photoshoot Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="./assets/pg1/banner-3dmodeling.jpg"
                    alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">13 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-3dproduct.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">3D
                        Modelling Product & Photoshoot</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar cara membuat model 3D detail dan
                        sesi photoshoot yang menarik dan profesional.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 499.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScF7Cyw5eU8TNZtHaftDjNqaKhY7BJMC2OuAlV3_1JSGiUl9A/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card 3D Modelling Product & Photoshoot Offline -->
            <!-- Card 3D Modelling Product & Photoshoot Offline -->
            <!-- Card 3D Modelling Product & Photoshoot Offline -->



            <!-- Card 3D Modelling Product & Photoshoot Online -->
            <!-- Card 3D Modelling Product & Photoshoot Online -->
            <!-- Card 3D Modelling Product & Photoshoot Online -->
            <div id="class-item online"
                class="flex overflow-hidden flex-col grow-0 my-auto bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy"
                    src="./assets/pg1/banner-3dproductmodelling-online.jpg" alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#5386C0]">16 September 2024</p>
                    <p class="font-semibold text-sm text-[#5386C0]">Kelas Online</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-3dproduct.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">3D
                        Modelling Product & Photoshoot</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar cara membuat model 3D detail dan
                        sesi photoshoot yang menarik dan profesional.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 249.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSf7eRvbOBE8wqD_-4fTMwUsywTuw85mVwL851fhXzPkDVm57w/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card 3D Modelling Product & Photoshoot Online -->
            <!-- Card 3D Modelling Product & Photoshoot Online -->
            <!-- Card 3D Modelling Product & Photoshoot Online -->



            <!-- Card ArcGIS and Geospatial Offline -->
            <!-- Card ArcGIS and Geospatial Offline -->
            <!-- Card ArcGIS and Geospatial Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="./assets/pg1/banner-argis.jpg"
                    alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">9 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-arcgis.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">ArcGIS
                        and Geospatial</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Kuasai ArcGIS and Geospatial untuk
                        mengolah data spasial secara profesional.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 649.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdDmtSE378_bc4aOa3bpzp0-e0fchvffz0uoqFAA2Y9vVDVPw/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card ArcGIS and Geospatial Offline -->
            <!-- Card ArcGIS and Geospatial Offline -->
            <!-- Card ArcGIS and Geospatial Offline -->



            <!-- Card ArcGIS and Geospatial Online -->
            <!-- Card ArcGIS and Geospatial Online -->
            <!-- Card ArcGIS and Geospatial Online -->
            <div id="class-item online"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy"
                    src="./assets/pg1/banner-arcgis-online.jpg" alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#5386C0]">9 September 2024</p>
                    <p class="font-semibold text-sm text-[#5386C0]">Kelas Online</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-arcgis.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">ArcGIS
                        and Geospatial</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Kuasai ArcGIS and Geospatial untuk
                        mengolah data spasial secara profesional.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 449.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSewwpV0h6MohizdmB1W0mHJXTlVSiC7z2Wxl_VBYALp2hrdgQ/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card ArcGIS and Geospatial Online -->
            <!-- Card ArcGIS and Geospatial Online -->
            <!-- Card ArcGIS and Geospatial Online -->



            <!-- Card SketchUp 3D Modelling Offline -->
            <!-- Card SketchUp 3D Modelling Offline -->
            <!-- Card SketchUp 3D Modelling Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="./assets/pg1/banner-sketch.jpg" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">2 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-sketc.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">SketchUp
                        3D Modelling</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar membuat model 3D dengan mudah
                        dan cepat.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 499.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdWtiudjGY7FkzOUxzIHUobPXVb9JUqWUHzN_HMGumr3Ve-qg/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card SketchUp 3D Modelling Offline -->
            <!-- Card SketchUp 3D Modelling Offline -->
            <!-- Card SketchUp 3D Modelling Offline -->



            <!-- Card Fullstack Developer Offline -->
            <!-- Card Fullstack Developer Offline -->
            <!-- Card Fullstack Developer Offline -->
            <div id="class-item offline"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy" src="./assets/pg1/banner-one-t.jpg"
                    alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#EDC423]">14 September 2024</p>
                    <p class="font-semibold text-sm text-[#EDC423]">Kelas Offline</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass-fullstack.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">Fullstack
                        Web Developer</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar bangun website lengkap dari
                        front-end hingga back-end, siap kerja profesional.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 items-center justify-between px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <p class="text-2xl text-white">Rp. 699.000</p>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScjeqPgSSOUUw6M8SmVACmREDgPg8t99sXK_G1xJaEpfoh08Q/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card Fullstack Developer Offline -->
            <!-- Card Fullstack Developer Offline -->
            <!-- Card Fullstack Developer Offline -->



            <!-- Card Fullstack Web Developer Online -->
            <!-- Card Fullstack Web Developer Online -->
            <!-- Card Fullstack Web Developer Online -->
            <div id="class-item online"
                class="flex overflow-hidden flex-col grow-0 bg-white rounded-2xl shadow-2xl min-w-[300px] max-w-[340px] hover:-translate-y-1 duration-300">
                <img class="object-cover w-full aspect-[1.54]" loading="lazy"
                    src="./assets/pg1/banner-fullstack-online.jpg" alt="Course image" />
                <div class="flex gap-5 justify-between mx-5 mt-3.5 max-w-full text-xs text-slate-500 w-[284px]">
                    <p class="font-semibold text-sm text-[#5386C0]">14 September 2024</p>
                    <p class="font-semibold text-sm text-[#5386C0]">Kelas Online</p>
                </div>
                <div class="flex relative flex-col px-5 pt-px pb-3 mt-1.5 w-full aspect-[2.944] max-md:pr-5 h-full">
                    <img class="object-cover absolute inset-0 size-full" loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/84aac03c2c1edcffb54394428a9bb97268abb241985df9af2fbd0d375930d385?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" />
                    <a href="./pages/detailclass.html"
                        class="relative text-xl font-extrabold tracking-wide rotate-[-2.554731426407386e-11rad] text-[#273F5A] max-md:mr-1 hover:underline">Fullstack
                        Web Developer</a>
                    <p class="relative mt-3 text-sm leading-5 text-neutral-600">Belajar bangun website lengkap dari
                        front-end hingga back-end, siap kerja profesional.</p>
                </div>
                <div class="flex px-5 items-center gap-4">
                    <div>
                        <img class="w-[60px]" src="./assets/pg1/profile-instructor.jpg" alt="">
                    </div>
                    <div>
                        <p class="font-extrabold text-[#273F5A]">Aliem Arif Perkasa</p>
                        <p class="relative text-sm leading-5 text-neutral-600">Manager Fullstack Web Development</p>
                    </div>
                </div>
                <div
                    class="relative flex gap-5 justify-between items-center px-4 pt-2.5 pb-4 mt-5 rounded-none bg-[#5386C0]">
                    <div class="flex flex-col font-bold">
                        <span class="text-2xl text-white">Rp. 449.000</span>
                    </div>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSev7KTP9_QEA1-A7G8O6QG4qR0VyvUkbMRFTuc2bTfHsx4Qtg/viewform"
                        target="_blank"
                        class="btn-second self-start px-3 py-1 mt-2.5 text-base font-semibold leading-relaxed text-white whitespace-nowrap rounded-md border border-white border-solid">Daftar</a>
                    <div
                        class="-bottom-80 -left-8 w-96 h-96 absolute z-50 bg-white opacity-10 rounded-full flex items-center justify-center">
                    </div>
                </div>
            </div>
            <!-- Card Fullstack Web Developer Online -->
            <!-- Card Fullstack Web Developer Online -->
            <!-- Card Fullstack Web Developer Online -->



        </div>
    </section>
=======
    <section class="flex flex-col mt-10">
        
        <?php include_once __DIR__ . "/pages/sections/listing/cards.php" ?>
        
>>>>>>> a65f7931f707f3a71cf9587d808c4d6d1dce73c9

    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->
    <?php include_once __DIR__ . "/pages/sections/callToAct.php" ?>
    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->

    <!-- FOOTER START ============== -->
    <!-- FOOTER START ============== -->
    <!-- FOOTER START ============== -->
<<<<<<< HEAD
    <footer class="flex flex-col bg-[linear-gradient(257deg,#273F5A_-50.35%,#5386C0_142.97%)] pt-11 w-full">
        <div class="flex flex-wrap gap-10 mx-auto w-full max-lg:px-5 max-w-[1290px] max-md:max-w-full">
            <div class="flex-auto max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col">
                    <div class="flex flex-col w-[51%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow text-sm text-white max-md:mt-10">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/20ddcb69f847d3600f99c8228bcbb1a5f8c7c3a1daca4d12e11799d23940dfd5?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                alt="Rupa Raya Indonesia logo"
                                class="object-contain max-w-full aspect-[3.33] w-[190px]" />
                            <p class="mt-5 font-light">
                                Jl. Adyaksa Baru No.2, Masale, Kec.<br />
                                Panakkukang, Kota Makassar, Sulawesi<br />
                                Selatan 90231
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-1/5 max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col items-start text-sm text-white max-md:mt-10">
                            <h2 class="text-xl font-semibold">Menu</h2>
                            <ul class="mt-2.5 list-none p-0">
                                <li><a href="#" class="text-white font-light no-underline">Beranda</a></li>
                                <li class="mt-1"><a href="#"
                                        class="text-white font-light no-underline">Program/Kelas</a></li>
                                <li class="mt-1"><a href="#" class="text-white font-light no-underline">Tentang Kami</a>
                                </li>
                                <li class="mt-1"><a href="#" class="text-white font-light no-underline">Testimonial</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[29%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col items-start text-sm text-white max-md:mt-10">
                            <h2 class="text-xl font-semibold">Program/Kelas</h2>
                            <ul class="mt-2.5 list-none p-0">
                                <li><a href="#" class="text-white font-light no-underline">Kelas Offline</a></li>
                                <li class="mt-1"><a href="#" class="text-white font-light no-underline">Kelas Online</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col items-start w-full">
                    <div class="flex gap-5">
                        <a href="#" aria-label="Facebook">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/eea0de67ff265db660885ad6d3abd371357cf57f513dccf68ddbc96fde317182?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                        </a>
                        <a href="#" aria-label="Twitter">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c64d2ccd0f03d7da6e9fc2e58102a09ef727773fe900bc12fcdb7d3a23e25c5b?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                        </a>
                        <a href="#" aria-label="Instagram">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/d042807ef59e5e09ff5748ddd5e28c69601bd7d0cb7b2f5fb2af68aae79242e7?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                        </a>
                    </div>
                    <div class="flex gap-4 mt-7 text-sm text-white">
                        <a href="tel:+6285242673019" class="text-white no-underline">+62 852-4267-3019</a>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d60b3bd7b3a685635432f03eb7eea731ed90553d761a49b82fcbb00ee30fdf7c?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                            alt="" class="object-contain shrink-0 self-start w-5 aspect-square" />
                    </div>
                </div>
                <div class="flex gap-4 mt-2.5 text-sm text-white whitespace-nowrap">
                    <a href="mailto:ruparaya.academy@gmail.com"
                        class="text-white no-underline">ruparaya.academy@gmail.com</a>
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/fa811b17cb22c5593a5744eb2ff5029f1c67575ca342287b826e30249e682100?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                        alt="" class="object-contain shrink-0 self-start w-5 aspect-square" />
                </div>
            </div>
        </div>
        <div class="px-16 py-2.5 mt-4 w-full text-xs text-center text-white bg-[#5386C0] max-md:px-5 max-md:max-w-full">
            Copyright © 2024 Rupa Raya Indonesia. All Rights Reserved
        </div>
    </footer>
=======
    <?php include_once __DIR__ . "/pages/sections/footer.php" ?>
>>>>>>> a65f7931f707f3a71cf9587d808c4d6d1dce73c9
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->

    <script src="./js/app.js"></script>
</body>

</html>