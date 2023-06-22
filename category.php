<?php

require_once("./db/db.php");

$id_categ = $_GET['id'];

$select_categ = mysqli_query($link, "SELECT * FROM `category` WHERE `id` = '$id_categ'");
$select_categ = mysqli_fetch_assoc($select_categ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    
    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/input.css">
    <link rel="stylesheet" href="./style/media.css">

    <!-- OWL -->
    <link rel="stylesheet" href="./style/owl.carousel.min.css">
    <link rel="stylesheet" href="./style/owl.theme.default.min.css">

    <script src="./script/jquery.min.js"></script>
    <script src="./script/owl.carousel.min.js"></script>
    <title>Главная</title>
</head>
<body>
    <?php
    require_once("./modules/header.php");
    ?>
    <main>

        <div class="car">
            <div class="marka">
                <div class="marka-wrapper" style="gap: 20px; align-items: center;">
                    <h1><?= $select_categ['name']; ?></h1>
                    <a href="./page_create/create-product.php?id=<?= $id_categ; ?>" style="color: black;"><i class="fa-solid fa-circle-plus fa-xl"></i></a>
                    <a href="./page_update/update-categ.php?id=<?= $id_categ; ?>" style="color: black;"><i class="fa-solid fa-pen fa-xl"></i></a>
                    <a href="./page_delete/delete-categ.php?id=<?= $id_categ; ?>" style="color: black;"><i class="fa-solid fa-trash fa-xl"></i></a>
                </div>
                <div class="marka-products">
                    <div class="mp-wrapper">
                        <?php
                        $select_all_product = mysqli_query($link, "SELECT * FROM `product` WHERE `idcateg` = '$id_categ' ORDER BY `id` DESC");
                        $select_all_product = mysqli_fetch_all($select_all_product);

                        foreach($select_all_product as $sap) { ?>
                            <div class="item">
                                <div class="item-wrapper">
                                    <div class="iw-img">
                                        <img src="<?= $sap[5]; ?>">
                                    </div>
                                    <div class="iw-descr">
                                        <p class="iwd-title"><?= $sap[2]; ?></p>
                                        <p><?= $sap[3]; ?></p>
                                        <a href="./product.php?id=<?= $sap[0]; ?>">Заказать</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="slogan">
                <div class="slogan-wrapper">
                    <div class="sw-title">
                        <p>BEST SERVICES</p>
                    </div>
                    <div class="sw-subtitle">
                        <p>Most Popular Car Rental Deals</p>
                    </div>
                    <div class="sw-slog">
                        <p>Explore below our best car services experience like never before</p>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="owl-carousel owl-theme">
                    <?php
                    $select_all_prod = mysqli_query($link, "SELECT * FROM `product` ORDER BY `id` DESC LIMIT 8");
                    $select_all_prod = mysqli_fetch_all($select_all_prod);

                    foreach($select_all_prod as $sap) { ?>
                        <div class="item">
                            <div class="item-wrapper">
                                <div class="iw-img">
                                    <img src="<?= "./" . $sap[5] ?>">
                                </div>
                                <div class="iw-descr">
                                    <p class="iwd-title"><?= $sap[2] ?></p>
                                    <p>
                                        <?php 
                                        $text = $sap[3];
                                        $cut_text = substr($text,0,500);
                                        $cut_text = $cut_text . "...";
                                        echo $cut_text;
                                        ?>
                                    </p>
                                    <a href="./product.php?id=<?= $sap[0] ?>">Заказать</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="choose">
            <div class="choose-wrapper">
                <div class="cwl-head">
                    <div class="sw-title">
                        <p>BEST SERVICES</p>
                    </div>
                    <div class="sw-subtitle">
                        <p>Most Popular Car Rental Deals</p>
                    </div>
                    <div class="sw-slog">
                        <p>Explore below our best car services experience like never before</p>
                    </div>
                </div>
                <div class="cw-info">
                    <div class="cw-left">
                        <div class="cwl-img">
                            <img src="./upload/mazda.png">
                        </div>
                    </div>
                    <div class="cw-right">
                        <ul class="cwr-ul">
                            <li class="cwru-item">
                                <p>
                                    <span>24/7 Customer Support</span>
                                    <br>
                                    We keep our valued customers happy and provide 24/7 customer support
                                </p>
                            </li>
                            <li class="cwru-item">
                                <p>
                                    <span>24/7 Customer Support</span>
                                    <br>
                                    We keep our valued customers happy and provide 24/7 customer support
                                </p>
                            </li>
                            <li class="cwru-item">
                                <p>
                                    <span>24/7 Customer Support</span>
                                    <br>
                                    We keep our valued customers happy and provide 24/7 customer support
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once("./modules/footer.php");
    ?>

    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:26,
            responsive:{
                0:{
                    items:1
                },
                1100:{
                    items:3
                },
                1500:{
                    items:4
                },
            }
        })
    </script>
</body>
</html>