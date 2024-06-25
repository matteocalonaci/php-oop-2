<?php

class Cuccia extends Prodotto {
public $dimensioni;

public function __construct($nome, $prezzo, $descrizione, Categoria $categoria, $dimensioni )
{
    parent::__construct($nome, $prezzo, $descrizione, $categoria);
    $this->dimensioni=$dimensioni;
}


public function getProdotti()
    {
        return parent::getProdotti() . " Dimensioni : " . $this->dimensioni ;  
      }
    
}