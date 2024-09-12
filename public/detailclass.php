<?php 

$num = $_GET['card'];


$classdata = file_get_contents("./pages/data/class.json");
$class = json_decode($classdata, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/custom.css">
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
                <img class="w-32" src="./assets/logo/rralogo-outline.png" alt="">
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
            <img class="img-cover object-top -z-10" src="./assets/details/bg-classdetail-3darchitectural.png" alt="">
            <div class="max-w-[525px] absolute z-20 text-white text-center">
                <h3 data-aos="fade-up" data-aos-duration="1100" class="md:text-[48px] font-bold text-[#273F5A] mb-4 leading-snug text-stroke">3D Architectural Rendering</h3>
                <h3 data-aos="fade-up" data-aos-duration="1500"><a href="../index.html">Beranda > </a><a href="./listing.html">Program/Kelas > </a><a href="#" class="text-[#EDC423]">Kelas Detail</a></h3>
            </div>
        </div>
    </header>

    <!-- DETAILS == -->
    <?php include_once __DIR__ . "/pages/sections/detailClass/classes.php" ?>
    <!-- DETAILS == -->


    <section class="relative mt-10">
        <div class="absolute top-0 left-0 right-0  max-w-[1250px] -z-10 mx-auto">
            <img src="./assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
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
                            <img src="./assets/details/ticket.png" class="absolute top-4 right-4" alt="">
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
                        <img src="./assets/details/award.png" class="absolute top-4 right-4" alt="">
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
                            <img src="./assets/details/users.png" class="absolute top-4 right-4" alt="">
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
                        <img src="./assets/details/monitor.png" class="absolute top-4 right-4" alt="">
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
            <img src="./assets/details/bg-instructor.jpg" class="object-cover absolute inset-0 size-full" alt="">
            <div data-aos="fade-left" data-aos-duration="1100" class="my-auto">
                <h2 class="relative text-xl font-medium text-white">Pengajar</h2>
                <h1 class="relative mt-2.5 text-3xl font-bold text-white">Aliem Arif Perkasa</h1>
                <p class="relative mt-2.5 mr-72 text-xl font-medium text-white max-md:mr-2.5">Manager Fullstack Web Development</p>
                <p class="relative font-light mt-8 text-[16px] text-white w-[700px] max-md:max-w-full">Aliem Arif Perkasa adalah seorang Fullstack Web Developer berpengalaman. Dalam kelas ini, Aliem akan membimbing kamu menguasai front-end dan back-end development dengan pendekatan yang praktis dan mudah dipahami.</p>
                <div class="relative mt-12 max-md:mt-10">
                    <div class="flex">
                        <a href="https://www.instagram.com/programer_malas?igsh=MW41dmM5cHhoNml4Yw%3D%3D">
                            <img src="./assets/details/instagram 1.png" class="mr-2" alt="">
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
            <img src="./assets/pg1/bg-qna.png" class="mt-5 w-full h-full" alt="">
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
    <?php include_once __DIR__ . "/pages/sections/footer.php" ?>
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->

<script src="./js/app.js"></script>
</body>
</html>