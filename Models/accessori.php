<?php
class accessori extends prodotti {
    public $materiale;
    public $dimensioni;
    
    public function __construct($nome, $image, $prezzo, $categoria, $materiale, $dimensioni) {
        parent::__construct($nome, $image, $prezzo, $categoria);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }
}
?>