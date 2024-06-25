<?php

class Categoria {
public $type;


public function __construct( $type)
{
    $this->type=$type;
  
}

public function getTipo(){
    return $this->type;
}



    
}