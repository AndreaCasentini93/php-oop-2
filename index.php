<?php
    require_once __DIR__ . '/scripts/products-database.php';
    require_once __DIR__ . '/scripts/user-database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>Shop Online</title>
    </head>

    <body>
        <!-- HEADER -->
        <?php include_once __DIR__ . '/partials/header.php'; ?>
        <!-- /HEADER -->

        <!-- MAIN -->
        <main>
            <div class="container d-flex justify-content-center flex-wrap">
                <?php foreach ($products as $product) { ?>
                    <?php
                        if ($product["genre"] == "clothing") {
                            $article = new ProductClothing($product["name"], $product["price"], $product["image"], $product["description"], $product["vote"], $product["reviews_number"], $product["expedition_price"], $product["color"], $product["size"], $product["season"]);
                        } elseif($product["genre"] == "sport") {
                            $article = new ProductSport($product["name"], $product["price"], $product["image"], $product["description"], $product["vote"], $product["reviews_number"], $product["expedition_price"], $product["weight"], $product["color"], $product["materials"]);
                        }
                    ?>
                    <a href="<?= $article->getUrl(); ?>" class="article_card text-center">
                        <ul>
                            <li class="article_img">
                                <img src="<?= $article->getImage(); ?>" alt="<?= $article->getName(); ?>">
                            </li>
                            <li class="article_name">
                                <?= $article->getName(); ?>
                            </li>
                            <li class="article_vote d-flex justify-content-center align-items-center">
                                <?php if($article->getVote() != 0 && $article->getReviewsNumber() != 0) { ?>
                                    Voto <?= $article->getVote(); ?>/5  <span><?= $article->getReviewsNumber(); ?> persone</span>
                                <?php } ?>
                            </li>
                            <li class="article_price">
                                €<?= $client->getDiscount($article->getPrice()) ?>
                            </li>
                            <li class="article_expedition_price">
                                <?php if($article->getExpeditionPrice() != 0) { ?>
                                    Costo di spedizione €<?= $article->getExpeditionPrice(); ?>
                                <?php } ?>
                            </li>
                        </ul>
                    </a>
                <?php } ?>
            </div>
        </main>
        <!-- /MAIN -->
    </body>
</html>