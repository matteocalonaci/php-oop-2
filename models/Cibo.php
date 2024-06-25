<?php

class Cibo extends Prodotto {
public $peso;

public function __construct($nome, $prezzo, $descrizione, Categoria $categoria, $peso )
{
    parent::__construct($nome, $prezzo, $descrizione, $categoria);
    $this->peso=$peso;
}

public function getProdotti()
    {
        return parent::getProdotti() . " Peso : " . $this->peso ;  
      }
}
    
