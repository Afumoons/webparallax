<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="<?= $description; ?>">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.min.css'); ?>">
</head>

<body>
    <button onclick="topFunction()" class="btnup" title="Go to top">^</button>

    <?= $this->include('components/layar_depan'); ?>
    <?= $this->include('components/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <div style="height: 1000px;"></div>



    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <!--*Custom Script -->
    <script src="<?= base_url('js/script.js'); ?>"></script>
</body>

</html>