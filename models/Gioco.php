<?php

class Gioco extends Prodotto {
public $materiale;

public function __construct($nome, $prezzo, $descrizione, Categoria $categoria, $materiale )
{
    parent::__construct($nome, $prezzo, $descrizione, $categoria);
    $this->materiale=$materiale;
}


public function getProdotti()
    {
        return parent::getProdotti() . " Materiale: " . $this->materiale ;  
      }
    
}