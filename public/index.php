<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/output.css">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <title>Rupa Raya Academy</title>
    <style> 
    .loading-test{
        animation: spin 2s infinite none;
    }

    @keyframes spin {
        0% {opacity: 0; scale: 1;}
        50% {opacity: 1; scale: 1.2;}
        100% {opacity: 0; scale: 1;}
    }

    @keyframes gone {
        0% {opacity: 0;}
        100% {opacity: 0;}
    }
    /* .moveUpAnim{
        animation: come 3s none;
    }
    @keyframes come {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    } */
    </style>
</head>
<body class="bg-[#E9ECEF]">
    <div id="loading-anim" class="fixed flex items-center justify-center top-0 left-0 bottom-0 right-0 z-[99999] duration-500 bg-white">
        <img class="loading-test" width="440px" src="./assets/logo/ruparayaacademy logo outline.png" alt="">
    </div>
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
    
    <!-- SECTION 1 POSTER HEADER START ==== -->
    <!-- SECTION 1 POSTER HEADER START ==== -->
    <!-- SECTION 1 POSTER HEADER START ==== -->
    <?php include_once __DIR__ . "/pages/sections/home/sect1-header.php" ?>
    <!-- SECTION 1 POSTER HEADER END ====== -->
    <!-- SECTION 1 POSTER HEADER END ====== -->
    <!-- SECTION 1 POSTER HEADER END ====== -->


    <!-- SECTION 2 EXPLANATION START ============ -->
    <!-- SECTION 2 EXPLANATION START ============ -->
    <!-- SECTION 2 EXPLANATION START ============ -->
    
    <?php include_once __DIR__ . "/pages/sections/home/sect2-expl.php" ?>
    <!-- SECTION 2 EXPLANATION END ============== -->
    <!-- SECTION 2 EXPLANATION END ============== -->
    <!-- SECTION 2 EXPLANATION END ============== -->

    <!-- SECTION 3 VIDEO START ====== -->
    <!-- SECTION 3 VIDEO START ====== -->
    <!-- SECTION 3 VIDEO START ====== -->
    <?php include_once __DIR__ . "/pages/sections/home/sect3-vid.php" ?>
    <!-- SECTION 3 VIDEO END =======- -->
    <!-- SECTION 3 VIDEO END =======- -->
    <!-- SECTION 3 VIDEO END =======- -->


    <!-- SECTION 4 CARD CLASS START ======= -->
    <!-- SECTION 4 CARD CLASS START ======= -->
    <!-- SECTION 4 CARD CLASS START ======= -->
    <?php include_once __DIR__ . "/pages/sections/home/sect4-card.php" ?>
    <!-- SECTION 4 CARD CLASS END ======= -->
    <!-- SECTION 4 CARD CLASS END ======= -->
    <!-- SECTION 4 CARD CLASS END ======= -->


    <!-- SECTION 5 WORDS START ========== -->
    <!-- SECTION 5 WORDS START ========== -->
    <!-- SECTION 5 WORDS START ========== -->
    <?php include_once __DIR__ . "/pages/sections/home/sect5-word.php" ?>
    <!-- SECTION 5 WORDS END ============ -->
    <!-- SECTION 5 WORDS END ============ -->
    <!-- SECTION 5 WORDS END ============ -->


    <!-- SECTION 6 IMAGES START ========== -->
    <!-- SECTION 6 IMAGES START ========== -->
    <!-- SECTION 6 IMAGES START ========== -->
    <?php include_once __DIR__ . "/pages/sections/home/sect6-imgs.php" ?>
    <!-- SECTION 6 IMAGES END ============ -->
    <!-- SECTION 6 IMAGES END ============ -->
    <!-- SECTION 6 IMAGES END ============ -->


    <!-- SECTION 7 QNA START ============= -->
    <!-- SECTION 7 QNA START ============= -->
    <!-- SECTION 7 QNA START ============= -->
    <?php include_once __DIR__ . "/pages/sections/home/sect7-qna.php" ?>
    <!-- SECTION 7 QNA END =============== -->
    <!-- SECTION 7 QNA END =============== -->
    <!-- SECTION 7 QNA END =============== -->


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