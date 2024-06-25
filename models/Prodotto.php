<?php
class Prodotto
{
    //ATTRIBUTI
    public $nome;
    public $prezzo;
    public $descrizione;
    public $categoria;
    
    //COSTRUTTORE
    public function __construct($nome, $prezzo, $descrizione, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->descrizione = $descrizione;
        $this->categoria = $categoria;
 

    }
    //ALTRE METODI
    public function getProdotti()
    {
        return " Nome: " . $this->nome ."<br>"
         ."  Categoria: "
         . $this->categoria->getTipo() . "<br>"
         . "  Descrizione: ". $this->descrizione ."<br>" 
         . "  Prezzo: " . $this->prezzo ."<br>" ;
    
    //    return "Nome: $this->nome" <br> "Categoria: $this->category"  <br> Descrizione: . $this->getType().  <br> Descrizione: $this->descrizione <br> Prezzo: $this->prezzo ";
    }
}




