<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?=$page_title ?? '' ?> Cooper Dev </title>

    <meta name="description" content="<?=$page_title ?? '' ?> Cooper Dev ">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/icon.png" sizes="180x180">
    <link rel="icon" href="assets/img/icon.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/icon.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="assets/img/icon.png" color="#7952b3">
    <link rel="icon" href="assets/img/icon.png">
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <?php
        require_once __DIR__.'/header.php';
    ?>

    <main>
        <?php
            require_once __DIR__."/../pages/{$page_to_load}.php";
        ?>
    </main>

    <!-- FOOTER -->
    <?php
        require_once __DIR__.'/footer.php';
    ?>

    <script
        src="assets/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
        crossorigin="anonymous">
    </script>
</body>

</html>
