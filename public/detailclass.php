<?php 

$card_num = $_GET['nums'];


$guruData = file_get_contents("./pages/data/guru.json");
$guru = json_decode($guruData, true);


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/output.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>Rupa Raya Academy</title>

</head>
<body class="bg-[#E9ECEF]">

    <!-- NAVIGATION BAR START =============== -->
    <!-- NAVIGATION BAR START =============== -->
    <!-- NAVIGATION BAR START =============== -->
    <nav id="nav" class="w-full top-0 z-[999] py-4 px-5 lg:px-12 bg-white shadow-2xl">
        <div class="max-w-[1440px] mx-auto flex justify-between items-center">
            <div>
                <img class="w-32" src="../assets/logo/rralogo-outline.png" alt="">
            </div>
            <div class="md:flex gap-10 hidden text-[#273F5A] text-[15px] font-semibold">
                <a href="../index.html" class="hover:text-[#5386C0] duration-300">Beranda</a>
                <a href="../pages/listing.html" class="text-[#5386C0]">Kursus/Kelas</a>                  
                <a href="../pages/about.html" class="hover:text-[#5386C0] duration-300">Tentang Kami</a>
                <a href="../pages/testimonial.html" class="hover:text-[#5386C0] duration-300">Testimonial</a>
            </div>
            <div class="md:hidden block">
                <div id="resNav" class="rounded-md px-2 text-black">
                    <i class="resBtn fas fa-bars"></i>
                </div>
                <div id="resMenu" class="fixed top-0 right-0 rounded-bl-[45px] p-10 bg-blue-rpr-thr-a2 text-white hidden resGoDown z-50">
                    <div id="resNavClose" class="inline absolute rounded-md right-5 text-white">
                        <i class="fas fa-x"></i>
                    </div>
                    <div class="block"></div>
                    <div class="mb-8">
                        <a class="mr-6 block border-b py-3"  href="./index.html">Beranda</a>
                        <a class="mr-6 block border-b py-3"  href="./pages/listing.html">Program/Kelas</a>
                        <a class="mr-6 block border-b py-3"  href="./pages/about.html">Tentang Kami</a>
                        <a class="mr-6 block border-b py-3"  href="./pages/testimonial.html">Testimonial</a>
                    </div>
                    <div class="flex flex-col items-start w-full">
                        <div class="flex gap-5 mb-4">
                          <a href="#" aria-label="Facebook">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/eea0de67ff265db660885ad6d3abd371357cf57f513dccf68ddbc96fde317182?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                          </a>
                          <a href="#" aria-label="Twitter">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c64d2ccd0f03d7da6e9fc2e58102a09ef727773fe900bc12fcdb7d3a23e25c5b?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                          </a>
                          <a href="#" aria-label="Instagram">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d042807ef59e5e09ff5748ddd5e28c69601bd7d0cb7b2f5fb2af68aae79242e7?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                          </a>
                        </div>
                        <div class="text-sm">
                            Copyright © 2024 Rupa Raya <br> Indonesia. All Rights Reserved
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVIGATION BAR END =============== -->
    <!-- NAVIGATION BAR END =============== -->
    <!-- NAVIGATION BAR END =============== -->

    <header class="">
        <div class="h-fit relative overflow-hidden centered-xy">
            <img class="img-cover object-top -z-10" src="../assets/details/bg-classdetail-3darchitectural.png" alt="">
            <div class="max-w-[525px] absolute z-20 text-white text-center">
                <h3 data-aos="fade-up" data-aos-duration="1100" class="md:text-[48px] font-bold text-[#273F5A] mb-4 leading-snug text-stroke">3D Architectural Rendering</h3>
                <h3 data-aos="fade-up" data-aos-duration="1500"><a href="../index.html">Beranda > </a><a href="../pages/listing.html">Program/Kelas > </a><a href="#" class="text-[#EDC423]">Kelas Detail</a></h3>
            </div>
        </div>
    </header>

    <section class="container-cs-w">
        <div class="flex lg:flex-row gap-x-4 flex-col lg:items-start px-4 py-5">
            <div class="flex flex-col rounded-none lg:w-[70%]">
                <article class="flex flex-col items-start px-5 py-6 w-full bg-white rounded-3xl max-md:px-5 max-md:max-w-full">
                <header class="flex flex-wrap items-center gap-5 justify-between self-stretch font-semibold max-md:max-w-full">
                    <h1 class="text-3xl text-[#273F5A] max-md:max-w-full">Kelas 3D Architectural Rendering</h1>
                    <span class="self-start px-4 py-px mt-2.5 text-base text-white rounded-md bg-[#5386C0]">3D Modelling</span>
                </header>
                <p class="mt-7 text-base text-stone-500 max-md:max-w-full">Dalam kelas ini, peserta akan mempelajari teknik rendering arsitektur 3D yang realistis dan mendetail, mulai dari konsep awal hingga hasil akhir. Peserta akan diajarkan cara menggunakan berbagai software dan tools profesional untuk menciptakan visualisasi bangunan yang presisi, lengkap dengan pengaturan tekstur, pencahayaan, serta elemen komposisi ruang.</p>
                <p class="mt-4 text-base text-stone-500 max-md:max-w-full">Selain itu, peserta juga akan mendalami teknik perspektif arsitektural, pengaturan pencahayaan virtual, dan post-processing untuk menghasilkan presentasi visual yang menonjol dan profesional. Kelas ini dirancang agar peserta dapat menguasai seluruh proses, dari modelling hingga rendering akhir, untuk menciptakan hasil yang menarik dan siap untuk dipresentasikan kepada klien.</p>
                <h2 class="mt-7 text-3xl font-semibold text-slate-700">Tools yang di gunakan :</h2>
                <div class="flex gap-6 mt-5 text-xl font-medium text-slate-700">
                    <span class="basis-auto">Aplikasi Blender</span>
                    <img loading="lazy" src="../assets/details/blender-icon.png" class="object-contain shrink-0 self-start aspect-[1.17] w-[34px]" alt="Blender logo" />
                </div>
                <p class="mt-4 text-base text-stone-500 max-md:max-w-full">Blender adalah aplikasi open-source yang kuat dan serbaguna untuk pembuatan 3D, yang mencakup modeling, sculpting, animasi, rendering, dan compositing. Digunakan oleh para profesional di industri film, game, dan desain, Blender memungkinkan pengguna untuk menciptakan segala jenis objek 3D, dari model sederhana hingga efek visual yang kompleks.</p>
                <div class="flex gap-6 mt-5 text-xl font-medium text-slate-700">
                    <span class="basis-auto">Aplikasi Adobe Photoshop</span>
                    <img loading="lazy" src="../assets/details/adobe-photoshop-icon.png" class="object-contain shrink-0 self-start aspect-[1.17] w-[34px]" alt="Blender logo" />
                </div>
                <p class="mt-4 text-base text-stone-500 max-md:max-w-full">Adobe Photoshop adalah aplikasi desain grafis dan pengeditan foto yang paling terkenal dan digunakan di seluruh dunia. Dirancang untuk para profesional di bidang fotografi, desain, dan seni digital, Photoshop menawarkan berbagai fitur canggih untuk mengedit, memanipulasi, dan memperbaiki gambar dengan tingkat presisi yang tinggi.</p>
                <div class="flex gap-6 mt-5 items-center text-xl font-medium text-slate-700">
                    <span class="basis-auto">Aplikasi D5 Render</span>
                    <img loading="lazy" src="../assets/details/d5render-icon.png" class="object-contain shrink-0 self-start aspect-[1.17] w-[43px]" alt="Blender logo" />
                </div>
                <p class="mt-4 text-base text-stone-500 max-md:max-w-full">D5 Render adalah aplikasi rendering real-time yang dirancang khusus untuk arsitektur dan desain visual. Dengan teknologi canggih, D5 Render memungkinkan pengguna untuk menghasilkan visualisasi 3D yang realistis dan detail dengan cepat. Aplikasi ini mendukung berbagai software desain arsitektur populer dan menawarkan fitur-fitur seperti pencahayaan fisik, material realistis, dan efek atmosfer yang menonjol, sehingga cocok untuk para profesional di bidang arsitektur, interior, dan lanskap.</p>
                <h2 class="mt-7 text-3xl font-semibold text-slate-700">Lokasi Kelas :</h2>
                <div class="flex relative flex-col flex-wrap gap-1.5 items-start self-stretch px-7 pt-96 pb-4 mt-8 text-base text-white rounded-md min-h-[477px] max-md:px-5 max-md:pt-24">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.467545816472!2d119.42170527426846!3d-5.143194652003857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee30045e23b87%3A0xb428b7d955e91c29!2sPT%20Rupa%20Raya%20Indonesia!5e1!3m2!1sid!2sid!4v1724295033623!5m2!1sid!2sid" class="object-cover absolute inset-0 size-full rounded-2xl shadow-inner-md  " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7474d593853be44913854e05e4d5857087c17491bd8fb7a5c8ba0f9ff0cde1c5?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" class="object-contain shrink-0 mt-1 w-3.5 aspect-[0.78]" alt="Location pin icon" />
                </div>
                </article>
            </div>

            <div class="flex flex-col rounded-none lg:w-[30%]">
                <div class="flex flex-col justify-center items-center px-4 rounded-3xl shadow-lg aspect-square bg-[linear-gradient(257deg,#273F5A_-50.35%,#5386C0_142.97%)]">
                    <img loading="lazy" src="../assets/details/flayer-3darchitectural.jpg" alt="Course preview image" class="object-contain rounded-xl">
                </div>
                <img loading="lazy" src="../assets/details/scedule-3darchitectural.jpg" alt="Course details image" class="object-contain mt-2.5 rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.25)]">
                <article class="flex flex-col items-center pt-5 mt-2.5 text-base bg-white rounded-3xl shadow-[0px_4px_20px_rgba(0,0,0,0.25)] text-neutral-500">
                    <div class="flex gap-5 justify-between w-full leading-loose max-w-[361px]">
                        <p>Mulai Tanggal</p>
                        <p>18 September 2024</p>
                    </div>
                    <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                    <div class="flex mt-2 gap-5 justify-between w-full leading-loose max-w-[361px]">
                        <p>Pertemuan</p>
                        <p>8x Pertemuan</p>
                    </div>
                    <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                    <div class="flex mt-2 gap-5 justify-between w-full leading-loose max-w-[361px]">
                        <p>Kelas</p>
                        <p>Reguler</p>
                    </div>
                    <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                    <div class="flex mt-2 gap-5 justify-between w-full leading-loose max-w-[361px]">
                        <p>Durasi Pertemuan</p>
                        <p>2 Jam</p>
                    </div>
                    <hr class="shrink-0 mt-1 max-w-full border border-solid border-neutral-300 w-[362px]">
                    <div class="flex my-5">
                        <h3 class="relative mt-5 lg:text-[40px] text-2xl font-extrabold text-[#273F5A]">Rp. 899.000</h3>
                        <p class="relative mt-7 text-[#FF9999] h-auto lg:text-base text-sm">
                            <s>Rp. 1.800.000</s>
                        </p>
                    </div>
                    <div class="relative overflow-hidden flex flex-col justify-center rounded-b-3xl self-stretch px-10 py-6 mt-5 w-full text-xl font-semibold text-white rounded-none bg-[#5386C0]">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScWQS2TQw8ZG3zEOZ57wRKU5pg-BVj5zT-NS4kae-MesmSRlg/viewform" target="_blank" class="btn px-16 py-3.5 rounded-xl z-10 border border-white border-solid text-center">Daftar Sekarang</a>
                        <div class="w-32 h-32 absolute -bottom-[75%] -left-[2%] bg-white opacity-10 rounded-full flex items-center justify-center">                        
                        </div>
                        <div class="w-28 h-28 absolute -bottom-[10%] -left-[10%] bg-white opacity-10 rounded-full flex items-center justify-center">                        
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="relative mt-10">
        <div class="absolute top-0 left-0 right-0  max-w-[1250px] -z-10 mx-auto">
            <img src="../assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
        </div>
        <div class=""> 
            <h3 class="text-center text-[32px] font-bold text-[#273F5A]">Keunggulan Kelas <span class="text-[#5386C0]">Rupa Raya Academy</span></h3>
            <p class="text-center mt-4 text-[#666666] text-[15px]">Raih Hasil Terbaik dengan Bergabung di Kelas Kami</p>
        </div>
        <div class="flex gap-48 justify-center">
            <div class="my-20">
                <div class="flex mb-10">
                    <div data-aos="flip-left" data-aos-duration="1000" class="relative flex py-7 px-7 bg-white shadow-xl w-[450px] rounded-[12px] overflow-hidden">
                        <div class="-right-16 -top-16 w-32 h-32 absolute z-20 bg-[#5386C0] opacity-10 rounded-full flex items-center justify-center"></div>
                        <div class="relative">
                            <div class="bg-[#F5AD97] w-[72px] h-[72px] rounded-full"></div>
                            <img src="../assets/details/ticket.png" class="absolute top-4 right-4" alt="">
                        </div>
                        <div class="ml-5">
                            <h3 class="text-[#273F5A] text-[24px] font-bold">Voucher discount</h3>
                            <p class="text-[15px] text-[#666666] mt-2">Nikmati diskon spesial untuk kelas tambahan, perluas keterampilan dengan biaya terjangkau</p>
                        </div>
                        <div class="-bottom-16 -left-16 w-32 h-32 absolute z-20 bg-[#5386C0] opacity-10 rounded-full flex items-center justify-center"></div>
                    </div>
                </div>

                <div data-aos="flip-left" data-aos-duration="1000" class="relative flex py-7 px-7 w-[450px] rounded-[12px] overflow-hidden">
                    <div class="relative">
                        <div class="bg-[#EBD889] w-[72px] h-[72px] rounded-full"></div>
                        <img src="../assets/details/award.png" class="absolute top-4 right-4" alt="">
                    </div>
                    <div class="ml-5">
                        <h3 class="text-[#273F5A] text-[24px] font-bold">Sertifikat Kelas</h3>
                        <p class="text-[15px] text-[#666666] mt-2">Dapatkan sertifikat resmi yang diakui untuk meningkatkan kredibilitas dan portofolio profesional Anda</p>
                    </div>
                </div>
            </div>

            <div class="my-20">
                <div class="flex mb-10">
                    <div data-aos="flip-right" data-aos-duration="1000" class="relative flex py-7 px-6 w-[450px] rounded-[12px] overflow-hidden">
                        <div class="relative">
                            <div class="bg-[#9EB9D7] w-[72px] h-[72px] rounded-full"></div>
                            <img src="../assets/details/users.png" class="absolute top-4 right-4" alt="">
                        </div>
                        <div class="ml-5">
                            <h3 class="text-[#273F5A] text-[24px] font-bold">Tergabung dengan kami</h3>
                            <p class="text-[15px] text-[#666666] mt-2">Bergabunglah dengan komunitas kami dan berkembang bersama para profesional di bidangnya</p>
                        </div>
                    </div>
                </div>

                <div data-aos="flip-right" data-aos-duration="1000" class="relative flex py-7 px-7 w-[450px] rounded-[12px] overflow-hidden">
                    <div class="relative">
                        <div class="bg-[#92D5F4] w-[72px] h-[72px] rounded-full"></div>
                        <img src="../assets/details/monitor.png" class="absolute top-4 right-4" alt="">
                    </div>
                    <div class="ml-5">
                        <h3 class="text-[#273F5A] text-[24px] font-bold">Kesempatan Magang</h3>
                        <p class="text-[15px] text-[#666666] mt-2">Peluang magang yang membuka pintu bagi pengalaman praktis dan jaringan industri yang berharga</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="flex">
        <div class="flex relative justify-end align-middle px-20 py-11 w-full  overflow-hidden min-h-[453px] max-md:px-5 max-md:max-w-full">
            <img src="../assets/details/bg-instructor.jpg" class="object-cover absolute inset-0 size-full" alt="">
            <div data-aos="fade-left" data-aos-duration="1100" class="my-auto">
                <h2 class="relative text-xl font-medium text-white">Pengajar</h2>
                <h1 class="relative mt-2.5 text-3xl font-bold text-white">Aliem Arif Perkasa</h1>
                <p class="relative mt-2.5 mr-72 text-xl font-medium text-white max-md:mr-2.5">Manager Fullstack Web Development</p>
                <p class="relative font-light mt-8 text-[16px] text-white w-[700px] max-md:max-w-full">Aliem Arif Perkasa adalah seorang Fullstack Web Developer berpengalaman. Dalam kelas ini, Aliem akan membimbing kamu menguasai front-end dan back-end development dengan pendekatan yang praktis dan mudah dipahami.</p>
                <div class="relative mt-12 max-md:mt-10">
                    <div class="flex">
                        <a href="https://www.instagram.com/programer_malas?igsh=MW41dmM5cHhoNml4Yw%3D%3D">
                            <img src="../assets/details/instagram 1.png" class="mr-2" alt="">
                            <a href="https://www.instagram.com/programer_malas?igsh=MW41dmM5cHhoNml4Yw%3D%3D" class="text-white font-light" target="_blank">@programer_malas</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </section>

    <!-- SECTION 7 QNA START ============= -->
    <!-- SECTION 7 QNA START ============= -->
    <!-- SECTION 7 QNA START ============= -->
    <section class="relative py-10">
        <div class="absolute top-0 left-0 right-0  max-w-[1250px] -z-10 mx-auto">
            <img src="../assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
        </div>
        <div class="max-w-[1032px] mx-auto relative">
            <div class="text-center">
                <h1 data-aos="fade-up" data-aos-duration="1100" class="text-3xl font-bold mb-4 ">Pertanyaan Seputar <span class="color-blue-rpr-scn">Kelas 3D Modelling Product & Photoshoot</span></h1>
            </div>
            <div class="relative flex flex-wrap gap-5 justify-between w-full text-base max-md:mr-2.5 max-md:max-w-full">

                <div class="mt-5 flex flex-wrap gap-10 items-start max-md:max-w-full">
                    <div class="">
                        <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                            <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                                <h4 class="md:text-base text-sm font-medium">Apa itu Fullstack Web Development?</h4>
                                <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                            </div>
                            <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                                <p class="md:text-base p-4 text-sm text-[#747474]">
                                    Rupa Raya Academy adalah sebuah lembaga pendidikan yang menyediakan berbagai kelas dan kursus di bidang Pemodelan dan Arsitektur 3D. Kami fokus pada materi terbaru yang praktis dan aplikatif. didukung oleh instruktur berpengalaman yang ahli di bidangnya. membantu peserta mengembangkan keterampilan yang relevan dengan industri saat ini.
                                </p>
                            </div>
                        </div>
                        <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                            <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                                <h4 class="md:text-base text-sm font-medium">Apa saja yang akan saya pelajari di kelas ini?</h4>
                                <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                            </div>
                            <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                                <p class="md:text-base p-4 text-sm text-[#747474]">
                                    Rupa Raya Academy adalah sebuah lembaga pendidikan yang menyediakan berbagai kelas dan kursus di bidang Pemodelan dan Arsitektur 3D. Kami fokus pada materi terbaru yang praktis dan aplikatif. didukung oleh instruktur berpengalaman yang ahli di bidangnya. membantu peserta mengembangkan keterampilan yang relevan dengan industri saat ini.
                                </p>
                            </div>
                        </div>
                        <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                            <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                                <h4 class="md:text-base text-sm font-medium">Apakah saya perlu memiliki pengalaman sebelumnya?</h4>
                                <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                            </div>
                            <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                                <p class="md:text-base p-4 text-sm text-[#747474]">
                                    Rupa Raya Academy adalah sebuah lembaga pendidikan yang menyediakan berbagai kelas dan kursus di bidang Pemodelan dan Arsitektur 3D. Kami fokus pada materi terbaru yang praktis dan aplikatif. didukung oleh instruktur berpengalaman yang ahli di bidangnya. membantu peserta mengembangkan keterampilan yang relevan dengan industri saat ini.
                                </p>
                            </div>
                        </div>
                        <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                            <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                                <h4 class="md:text-base text-sm font-medium">Apakah ada dukungan setelah kelas selesai?</h4>
                                <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                            </div>
                            <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                                <p class="md:text-base p-4 text-sm text-[#747474]">
                                    Rupa Raya Academy adalah sebuah lembaga pendidikan yang menyediakan berbagai kelas dan kursus di bidang Pemodelan dan Arsitektur 3D. Kami fokus pada materi terbaru yang praktis dan aplikatif. didukung oleh instruktur berpengalaman yang ahli di bidangnya. membantu peserta mengembangkan keterampilan yang relevan dengan industri saat ini.
                                </p>
                            </div>
                        </div>
                        <div class="ask w-full bg-gray-50 mb-4 shadow-md rounded-lg hdn">
                            <div class="p-4 cursor-pointer flex justify-between relative rounded-t-lg">
                                <h4 class="md:text-base text-sm font-medium">Apa peralatan atau software yang dibutuhkan?</h4>
                                <span class="arrow-rotate elementor-toggle-icon elementor-toggle-icon-right float-right text-right text-black md:w-4 w-2 absolute right-4" aria-hidden="true"><span class="elementor-toggle-icon-closed"><img src="../assets/icon/dropdown-plus.svg" alt=""></span></span>
                            </div>
                            <div class="answer w-full bg-gray-50 rounded-b-lg">                                
                                <p class="md:text-base p-4 text-sm text-[#747474]">
                                    Rupa Raya Academy adalah sebuah lembaga pendidikan yang menyediakan berbagai kelas dan kursus di bidang Pemodelan dan Arsitektur 3D. Kami fokus pada materi terbaru yang praktis dan aplikatif. didukung oleh instruktur berpengalaman yang ahli di bidangnya. membantu peserta mengembangkan keterampilan yang relevan dengan industri saat ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 7 QNA END =============== -->
    <!-- SECTION 7 QNA END =============== -->
    <!-- SECTION 7 QNA END =============== -->

    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->
    <section data-aos="fade-up" data-aos-duration="900" class="px-2 mb-20">
        <div class="relative- h-[275px] max-w-[1100px] mx-auto rounded-[24px] centered-xy bg-cover bg-no-repeat bg-[url('../assets/about/section/cta.png')]">
            <div class="flex md:gap-28 md:flex-row flex-col items-center md:px-12 px-8 absolute z-20 text-white ">
                <div class="max-w-[600px] md:text-left text-center">
                    <h3 class="md:text-[40px] text-3xl font-bold leading-[57px]">Ingin Tahu Lebih? Hubungi Kami Sekarang</h3>
                </div>
                <div class="bg-white md:py-4 py-2 px-6 rounded-full md:mt-0 mt-6">
                    <a href="#class" class="text-[#5386C0] md:text-xl text-lg font-semibold">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->
    <!-- SECTION 8 QNA START ============= -->

    <!-- FOOTER START ============== -->
    <!-- FOOTER START ============== -->
    <!-- FOOTER START ============== -->
    <footer class="flex flex-col bg-[linear-gradient(257deg,#273F5A_-50.35%,#5386C0_142.97%)] pt-11 w-full">
        <div class="flex flex-wrap gap-10 mx-auto w-full max-lg:px-5 max-w-[1290px] max-md:max-w-full">
          <div class="flex-auto max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
              <div class="flex flex-col w-[51%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow text-sm text-white max-md:mt-10">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/20ddcb69f847d3600f99c8228bcbb1a5f8c7c3a1daca4d12e11799d23940dfd5?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="Rupa Raya Indonesia logo" class="object-contain max-w-full aspect-[3.33] w-[190px]" />
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
                    <li class="mt-1"><a href="#" class="text-white font-light no-underline">Program/Kelas</a></li>
                    <li class="mt-1"><a href="#" class="text-white font-light no-underline">Tentang Kami</a></li>
                    <li class="mt-1"><a href="#" class="text-white font-light no-underline">Testimonial</a></li>
                  </ul>
                </div>
              </div>
              <div class="flex flex-col ml-5 w-[29%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col items-start text-sm text-white max-md:mt-10">
                  <h2 class="text-xl font-semibold">Program/Kelas</h2>
                  <ul class="mt-2.5 list-none p-0">
                    <li><a href="#" class="text-white font-light no-underline">Kelas Offline</a></li>
                    <li class="mt-1"><a href="#" class="text-white font-light no-underline">Kelas Online</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col">
            <div class="flex flex-col items-start w-full">
              <div class="flex gap-5">
                <a href="#" aria-label="Facebook">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/eea0de67ff265db660885ad6d3abd371357cf57f513dccf68ddbc96fde317182?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                </a>
                <a href="#" aria-label="Twitter">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c64d2ccd0f03d7da6e9fc2e58102a09ef727773fe900bc12fcdb7d3a23e25c5b?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                </a>
                <a href="#" aria-label="Instagram">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d042807ef59e5e09ff5748ddd5e28c69601bd7d0cb7b2f5fb2af68aae79242e7?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                </a>
              </div>
              <div class="flex gap-4 mt-7 text-sm text-white">
                <a href="tel:+6285242673019" class="text-white no-underline">+62 852-4267-3019</a>
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d60b3bd7b3a685635432f03eb7eea731ed90553d761a49b82fcbb00ee30fdf7c?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 self-start w-5 aspect-square" />
              </div>
            </div>
            <div class="flex gap-4 mt-2.5 text-sm text-white whitespace-nowrap">
              <a href="mailto:ruparaya.academy@gmail.com" class="text-white no-underline">ruparaya.academy@gmail.com</a>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/fa811b17cb22c5593a5744eb2ff5029f1c67575ca342287b826e30249e682100?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb" alt="" class="object-contain shrink-0 self-start w-5 aspect-square" />
            </div>
          </div>
        </div>
        <div class="px-16 py-2.5 mt-4 w-full text-xs text-center text-white bg-[#5386C0] max-md:px-5 max-md:max-w-full">
          Copyright © 2024 Rupa Raya Indonesia. All Rights Reserved
        </div>
      </footer>
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->

<script src="../js/app.js"></script>    
</body>
</html>