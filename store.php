
<?php
include_once __DIR__ . '/models/Prodotto.php';
include_once __DIR__ . '/models/Categoria.php';
include_once __DIR__ . '/models/Cibo.php';
include_once __DIR__ . '/models/Cuccia.php';
include_once __DIR__ . '/models/Gioco.php';



$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");
$pet = new Categoria("Cane e Gatto");


$Lilys_Kitchen = new Cibo(
    "Lily's_Kitchen",
    "€22,61",
    "Vaschetta di paté naturale",
    $gatto,
    "85g"
);
$Purina = new Cibo(
    "Purina",
    "€50,99",
    "Crocchette di salmone",
    $cane,
    "12 kg"
);
$EHEYCIGA = new Cuccia(
    "EHEYCIGA",
    "€54,99",
    "Cuccia Cane Interno",
    $cane,
    "76x51x16cm"
);
$Topbashgo = new Gioco(
    "Topbashgo",
    "€9,99",
    "Palla Active Moving Pet, giocattolo interattivo",
    $pet,
    "ABS",
    
);
$PETTOM = new Gioco(
    "Pettom",
    "€22,95",
    "Giocattolo per gatti elettrico",
    $gatto,
    "Plastica"
);







$articoli = [$Lilys_Kitchen, $Purina, $EHEYCIGA, $Topbashgo, $PETTOM];
