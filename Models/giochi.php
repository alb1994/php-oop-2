<?php
class giochi extends prodotti {
    public $caratteristiche;
    public $dimensioni;
    
    public function __construct($nome, $image, $prezzo, $categoria, $caratteristiche, $dimensioni) {
        parent::__construct($nome, $image, $prezzo, $categoria);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }
}
?>