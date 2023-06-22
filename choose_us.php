<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&display=swap" rel="stylesheet">
    
    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/input.css">
    <link rel="stylesheet" href="./style/media.css">

    <!-- OWL -->
    <link rel="stylesheet" href="./style/owl.carousel.min.css">
    <link rel="stylesheet" href="./style/owl.theme.default.min.css">

    <script src="./script/jquery.min.js"></script>
    <script src="./script/owl.carousel.min.js"></script>
    <title>Почему выбирают нас?</title>
</head>
<body>
    <?php
    require_once("./modules/header.php");
    ?>
    <main>
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