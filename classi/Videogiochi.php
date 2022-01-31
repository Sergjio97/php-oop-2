<?php

class Videogiochi {

    public $piattaforma;
    public $anno;
    public $genere;
    public $tema;
    public $sviluppo;
    public $modalita_di_gioco;
    public $fascia_di_eta;

    public function __construct ($_piattaforma, $_anno, $_genere, $_tema, $_sviluppo, $_modalita_di_gioco, $_fascia_di_eta) {

        $this->piattaforma = $_piattaforma;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->tema = $_tema;
        $this->sviluppo = $_sviluppo;
        $this->modalita_di_gioco = $_modalita_di_gioco;
        $this->fascia_di_eta = $_fascia_di_eta;
       
    }
    
}

?>