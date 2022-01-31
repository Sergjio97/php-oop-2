<?php

class Utenti {

    public $nome;
    public $cognome;
    public $mail;
    public $eta;
    public $indirizzo;
    public $telefono;

    public function __construct ($_nome, $_cognome, $_mail, $_eta, $_indirizzo, $_telefono) {

        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->mail = $_mail;
        $this->eta = $_eta;
        $this->indirizzo = $_indirizzo;
        $this->telefono = $_telefono;
       
    }

}

?>