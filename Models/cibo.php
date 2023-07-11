<?php
class cibo extends prodotti {
    public $peso;
    public $ingredienti;
    
    public function __construct($nome, $image, $prezzo, $categoria, $peso, $ingredienti) {
        parent::__construct($nome, $image, $prezzo, $categoria);
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }
}
?>