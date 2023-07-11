<?php
class Prodotti {
    public $nome;
    public $image;
    public $prezzo;
    public $categoria;

    public function __construct($nome, $image, $prezzo, $categoria) {
        $this->nome = $nome;
        $this->image = $image;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}
?>