<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <title><?= $title ?></title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="wrapper-header flex container">
            <!-- logo -->
            <div class="wrapper-header-logo">
                <img
                src="assets\img\mito.png"
                alt=""
                class="header-logo" 
                />
            </div>
            <!-- navigation -->
            <nav>
        <?php 
        $current_page = $_SERVER["PHP_SELF"];
        $home;
        $products;
        $contact;
        if ($current_page === "/mito_php/index.php") {
            $home = "active";
        } else if ($current_page === "/mito_php/products.php") {
            $products = "active";
        } else {
            $contact = "active";
        }
        var_dump($current_page) 
        ?>  
                <ul class="wrapper-header-nav flex">
                    <li><a href="index.php" class="<?= $home ?>">Home</a></li>
                    <li><a href="products.php" class="<?= $products ?>">Produits</a></li>
                    <li><a href="contact.php" class="<?= $contact ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- hero -->
        <div class="wrapper-header-hero">
            <div class="wrapper-header-hero-overlay">
                <p class="container">Le leader français du Bio</p>
                <h1 class="container">Bienvenue chez Mito</h1>
            </div>
        </div>
    </header>
    <!-- end header -->