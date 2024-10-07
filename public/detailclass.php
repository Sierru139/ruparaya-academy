<?php 

$num = $_GET['class'];


$classdata = file_get_contents("./pages/data/class.json");
$class = json_decode($classdata, true);

$activeClass = array_filter($class, function($item){
    global $num;
    return $item['detail-id'] == $num;
});
// var_dump($activeClass);

// if (!array_key_exists($num, $class) || $num === null) {
//     header("Location: error.php");
//     exit();
// }
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
    <link rel="icon" href="/assets/logo/ruparayaacademyicon.png" type="image/png">
    <!-- <link rel="shortcut icon" type="icon" href="./assets/logo/ruparayaacademy logo outline.png"> -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>Rupa Raya Academy</title>

</head>
<body class="bg-[#E9ECEF]">

    <!-- NAVIGATION BAR START =============== -->
    <!-- NAVIGATION BAR START =============== -->
    <!-- NAVIGATION BAR START =============== -->
    <?php include_once __DIR__ . "/pages/sections/navbar.php" ?>
    <!-- NAVIGATION BAR END =============== -->
    <!-- NAVIGATION BAR END =============== -->
    <!-- NAVIGATION BAR END =============== -->


    <!-- =============== DETAILS =============== -->
    <?php include_once __DIR__ . "/pages/sections/detailClass/classes.php" ?>
    <!-- =============== DETAILS =============== -->


    <!-- =============== ADVENTAGE CLASS =============== -->
    <?php include_once __DIR__ . "/pages/sections/detailClass/classAdvantage.php" ?>
    <!-- =============== ADVENTAGE CLASS =============== -->


    <!-- =============== Teach =============== -->

      <?php include_once __DIR__ . "/pages/sections/detailClass/teach.php" ?>
    <!-- =============== Teach =============== -->

    <!-- SECTION 7 QNA START ============= -->
    <!-- SECTION 7 QNA START ============= -->
    <!-- SECTION 7 QNA START ============= -->
    
    <!-- <section class="relative py-10">
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
                                    <b>Fullstack Web Development</b> adalah pendekatan di mana seorang developer menangani pengembangan baik pada sisi frontend (antarmuka pengguna) menggunakan HTML, CSS, dan JavaScript, maupun pada sisi backend (server dan database) menggunakan teknologi seperti Node.js, Python, atau MySQL, untuk menciptakan aplikasi web yang berfungsi penuh dari tampilan hingga pengolahan data.
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
                                    Di kelas 3D Modelling Product & Photoshoot ini, Anda akan belajar teknik dasar hingga lanjutan dalam membuat model 3D produk, mulai dari konsep, pemodelan, tekstur, hingga rendering. Selain itu, Anda juga akan mempelajari cara melakukan photoshoot digital untuk produk-produk yang sudah di-render, mencakup pencahayaan, komposisi, dan editing post-produksi.
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
                                    Tidak perlu. Kelas ini dirancang untuk pemula maupun mereka yang sudah memiliki sedikit pengalaman. Kami akan memandu Anda melalui setiap langkah, mulai dari pengenalan software hingga teknik yang lebih kompleks.
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
                                    Ya, setelah kelas selesai, Anda tetap mendapatkan akses ke komunitas online kami di mana Anda bisa bertanya, berbagi proyek, dan mendapatkan feedback dari mentor dan peserta lainnya. Selain itu, kami juga menyediakan sesi konsultasi terbatas untuk membantu jika ada tantangan yang dihadapi setelah kelas.
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
                                    Anda memerlukan laptop atau komputer dengan spesifikasi yang mendukung software 3D seperti Blender, Autodesk Maya, atau 3ds Max. Selain itu, untuk editing photoshoot, Anda bisa menggunakan software seperti Adobe Photoshop atau Lightroom. Kami akan memberikan panduan lengkap tentang instalasi dan penggunaan software selama kelas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <?php include_once __DIR__ . "/pages/sections/home/sect7-qna.php" ?>

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