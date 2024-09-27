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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Rupa Raya Academy</title>


</head>
<body>

    <a href="https://api.whatsapp.com/send?phone=+6285242673019&amp;text=Halo saya mau bertanya tentang Rupa Raya Academy" class="float" target="_blank">
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
                <h3 class="md:text-4xl text-[32px] font-semibold mb-4" data-aos="fade-up" data-aos-once="true" data-aos-duration="1100">Kursus/Kelas</h3>
                <h3 data-aos="fade-up" data-aos-duration="1500" data-aos-once="true"><a href="#">Beranda > </a><a href="#" class="text-[#EDC423]">Kursus/Kelas</a></h3>
            </div>
        </div>
    </header>

    <!-- SECTION 4 CARD CLASS START ======= -->
    <!-- SECTION 4 CARD CLASS START ======= -->
    <!-- SECTION 4 CARD CLASS START ======= -->
    <section class="flex flex-col mt-10">
        
        <?php include_once __DIR__ . "/pages/sections/listing/cards.php" ?>
        

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
    <?php include_once __DIR__ . "/pages/sections/footer.php" ?>
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->
    <!-- FOOTER END ============== -->

<script src="./js/app.js"></script>
</body>
</html>