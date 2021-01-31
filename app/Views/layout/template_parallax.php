<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="Description" content="<?= $description; ?>">
    <title><?= $title; ?></title>
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.theme.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.css'); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('css/style.min.css'); ?>">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

    <!-- Font Awesome kit -->
    <!-- <script src="https://kit.fontawesome.com/e7d3e74a3e.js" crossorigin="anonymous"></script> -->


</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


    <!-- =========================
     PRE LOADER       
    ============================== -->
    <div class="preloader">

        <div class="sk-rotating-plane"></div>

    </div>

    <?= $this->include('components/nav'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('components/footer'); ?>

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- =========================
        SCRIPTS   
    ============================== -->
    <script src="<?= base_url('js/jquery.js'); ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('js/jquery.parallax.js'); ?>"></script>
    <script src="<?= base_url('js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('js/smoothscroll.js'); ?>"></script>
    <script src="<?= base_url('js/wow.min.js'); ?>"></script>
    <script src="<?= base_url('js/custom.js'); ?>"></script>

</body>

</html>