<?php 

$num = $_GET['class'];

$qnadata = file_get_contents("./pages/data/qna.json");
$qna = json_decode($qnadata, true);

$activeQna = array_filter($qna, function($item){
    global $num;
    return $item['qna-id'] == $num;
});

$teachdata = file_get_contents("./pages/data/teach.json");
$teach = json_decode($teachdata, true);

$activeTeach = array_filter($teach, function($item){
    global $num;
    return $item['teach-id'] == $num;
});

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

    <?php include_once __DIR__ . "/pages/sections/detailClass/qna.php" ?>

    <!-- SECTION 7 QNA END =============== -->
    <!-- SECTION 7 QNA END =============== -->
    <!-- SECTION 7 QNA END =============== -->

    <!-- SECTION 8 CTA START ============= -->
    <!-- SECTION 8 CTA START ============= -->
    <!-- SECTION 8 CTA START ============= -->
    <?php include_once __DIR__ . "/pages/sections/callToAct.php" ?>
    <!-- SECTION 8 CTA START ============= -->
    <!-- SECTION 8 CTA START ============= -->
    <!-- SECTION 8 CTA START ============= -->

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