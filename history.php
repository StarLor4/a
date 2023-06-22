<?php
require_once("./db/db.php");
$id_user = $_COOKIE['iduser'];
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
    
    <!-- DEFAULT CSS -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/input.css">
    <link rel="stylesheet" href="./style/media.css">
    <link rel="stylesheet" href="./style/table.css">

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
        <h2>История покупок</h2>
        <table>
            <thead>
                <tr>
                    <th>Код товара</th>
                    <th>Наименование товара</th>
                    <th>Цена товара</th>
                </tr>
            <thead>
            <tbody>
                <?php
                $select_card = mysqli_query($link, "SELECT * FROM `card` WHERE `iduser` = '$id_user'");
                $select_card = mysqli_fetch_all($select_card);

                foreach($select_card as $sc) {
                    $id_sc = $sc[2];
                    $select_one_prod = mysqli_query($link, "SELECT * FROM `product` WHERE `id` = '$id_sc'");
                    $select_one_prod = mysqli_fetch_assoc($select_one_prod); ?>

                    <tr>
                        <td><?= $select_one_prod['id']; ?></td>
                        <td><?= $select_one_prod['name']; ?></td>
                        <td><?= $select_one_prod['price']; ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
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