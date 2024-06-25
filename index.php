<?php
include __DIR__ . "/store.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">



</head>

<body>

    <h1>Pet Shop</h1>
    <div class="img_container">
        <div class="img">
            <img src="./img/cibo_gatto.jpg" alt="">
        </div>

        <div class="img">
            <img src="./img/cibo_cane.jpg" alt="">
        </div>
        <div class="img">
            <img src="./img/cuccia-cane.jpg" alt="">
        </div>

        <div class="img">
            <img src="./img/gioco_cane&gatto.jpg" alt="">
        </div>

        <div class="img">
            <img src="./img/gioco_gatto.jpg" alt="">

        </div>
    </div>

    <!-- SOLUZIONE FOR EACH + ARRAY + FUNCTION -->
    <ul>
        <?php
        foreach ($articoli as $indice => $art) {
        ?> <li> <?= $art->getProdotti() ?></li><?php
                                            }
                                                ?>
    </ul>
    
<hr>
<h2>MILESTONE 2</h2>
<h5>Prodotti per cani</h5>

<!-- STAMPARE IN PAGINA I PRODOTTI PER CANI PER CLASSE -->

    <ul>
        <?php
        foreach ($articoli_cane as $indice => $art) { ?>
            <li>
                <?=" Nome: " .  $art->nome ?> <br>
                <?=" Categoria: " .  $art->categoria->type ?> <br>
                <?=" Prezzo: " . $art->prezzo ?> <br>
                <?=" Descrizione: " . $art->descrizione ?> <br>
                <?php
                if (get_class($art) == "Cibo") {
                    echo " Peso: " . $art->peso;
                } else if(get_class($art) == "Cuccia"){
                    echo " Dimensioni: " . $art->dimensioni; 
                } else if (get_class($art) == "Gioco") {
                    echo " Materiale: " . $art->materiale;
                }
                
                ?>
            <?php
        }
            ?>
    </ul>

    <h5>Prodotti per gatti</h5>

    <!-- STAMPARE IN PAGINA I PRODOTTI PER GATTI PER CLASSE -->


    <ul>
        <?php
        foreach ($articoli_gatto as $indice => $art) { ?>
            <li>
                <?=" Nome: " . $art->nome ?> <br>
                <?=" Categoria: " .  $art->categoria->type ?> <br>
                <?=" Prezzo: " . $art->prezzo ?> <br>
                <?=" Descrizione: " . $art->descrizione ?> <br>
                <?php
                if (get_class($art) == "Cibo") {
                    echo" Peso: " . $art->peso;
                } else if (get_class($art) == "Gioco") {
                    echo" Materiale: " . $art->materiale;
                }
                ?>
            <?php
        }
            ?>
    </ul>



</body>

</html>