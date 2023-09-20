<?php
class Movi {
    public $copertina;
    public $descrizione;
    public $titolo;

    function __construct( $_copertina ,string $_descrizione, string $_titolo)
    {
        $this->copertina = $_copertina;
        $this->descrizione = $_descrizione;
        $this->titolo = $_titolo;
    }
};

?>