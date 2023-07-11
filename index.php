<?php

require_once __DIR__.'/Models/prodotti.php';
require_once __DIR__.'/Models/cibo.php';
require_once __DIR__.'/Models/giochi.php';
require_once __DIR__.'/Models/accessori.php';



$prodotto_1 = new cibo('Royal Canin Mini Adult',
'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
43.99,
'Cane',
545,
'prosciutto,riso'
);
$prodotto_2 =new cibo ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
44.99,
'Cane',
600,
'manzo, cereali');
$prodotto_3 =new giochi ('Kong Classic',
'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
13.48,
'Cane',
'Galleggia e rimbalza',
'8,5cm x 10cm');
$prodotto_4 =new accessori ('Cartucce Filtranti per Filtro EasyCrystal',
'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
 2.29,
'Pesce',
'Legno',
'ND');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Card Prodotto</title>
    <style>
        .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
        }
        .card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="<?php echo $prodotto_1->image; ?>" alt="Prodotto 1">
        <h2><?php echo $prodotto_1->nome; ?></h2>
        <p>Prezzo: <?php echo $prodotto_1->prezzo; ?>€</p>
        <p>Categoria: <?php echo $prodotto_1->categoria; ?></p>
        <?php if ($prodotto_1 instanceof Cibo) : ?>
            <p>Peso: <?php echo $prodotto_1->peso; ?>g</p>
            <p>Ingredienti: <?php echo $prodotto_1->ingredienti; ?></p>
        <?php endif; ?>
    </div>
    <div class="card">
        <img src="<?php echo $prodotto_2->image; ?>" alt="Prodotto 2">
        <h2><?php echo $prodotto_2->nome; ?></h2>
        <p>Prezzo: <?php echo $prodotto_2->prezzo; ?>€</p>
        <p>Categoria: <?php echo $prodotto_2->categoria; ?></p>
        <?php if ($prodotto_2 instanceof Cibo) : ?>
            <p>Peso: <?php echo $prodotto_2->peso; ?>g</p>
            <p>Ingredienti: <?php echo $prodotto_2->ingredienti; ?></p>
        <?php endif; ?>
    </div>
    <div class="card">
        <img src="<?php echo $prodotto_3->image; ?>" alt="Prodotto 3">
        <h2><?php echo $prodotto_3->nome; ?></h2>
        <p>Prezzo: <?php echo $prodotto_3->prezzo; ?>€</p>
        <p>Categoria: <?php echo $prodotto_3->categoria; ?></p>
        <?php if ($prodotto_3 instanceof giochi) : ?>
            <p>Caratteristiche: <?php echo $prodotto_3->caratteristiche; ?>g</p>
            <p>Dimensioni: <?php echo $prodotto_3->dimensioni; ?></p>
        <?php endif; ?>
    </div>
    <div class="card">
        <img src="<?php echo $prodotto_4->image; ?>" alt="Prodotto 4">
        <h2><?php echo $prodotto_4->nome; ?></h2>
        <p>Prezzo: <?php echo $prodotto_4->prezzo; ?>€</p>
        <p>Categoria: <?php echo $prodotto_4->categoria; ?></p>
        <?php if ($prodotto_4 instanceof accessori) : ?>
            <p>Materiali: <?php echo $prodotto_4->materiale; ?>g</p>
            <p>Dimensioni: <?php echo $prodotto_4->dimensioni; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>