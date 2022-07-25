<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <ul class="flex">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Produits</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- hero -->
        <div class="wrapper-header-hero">
            <p class="">Le leader français du Bio</p>
            <h1 class="">Bienvenue chez Mito</h1>
        </div>
    </header>
    <!-- end header -->