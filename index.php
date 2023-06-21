<?php

$products = [
    new products('/img/cuccia_cani.jpg', 'Cuccia da esterno per cani', '59.99€', 'Cani'),
    new products('/img/mangiare_cani_agnello.webp', 'Cibo gusto agnello', '50.99€', 'Cani'),
    new products('/img/mangiare_cani_salmone.webp', 'Cibo gusto salmone', '34.99€', 'Cani'),
    new products('/img/mangiare_gatti.webp', 'Cibo gusto tacchino', '14.99€', 'Gatti'),
    new products('/img/mangiare_gatti_pollo.jpg', 'Cibo gusto pollo', '19.99€', 'Gatti'),
    new products('/img/gioco_gatti.jpg', 'Gioco in legno per gatti', '22.99€', 'Gatti'),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Pet Shop</title>
</head>

<body>
    <header>
        <div class="container p-2 text-center">
            <h2>Animalstore</h2>
        </div>
    </header>
    <div class="container d-flex flex-wrap my-5">
        <?php foreach ($products as $product) : ?>
            <div class="card m-2" style="width: 18rem;">
                <img src="<?php $product->getImages(); ?>" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title"><?php $product->getName(); ?></h5>
                    <p class="card-text"><?php $product->getCategories(); ?></p>
                    <a href="#" class="btn btn-primary"><?php $product->getPrice(); ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>