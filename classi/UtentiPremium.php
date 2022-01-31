<?php

class UtentiPremium extends Utenti {
    public $capitoli_posseduti;

    public function getSconto() {
        if ($this->capitoli_posseduti >= 3) {
            return 15;
        } elseif ($this->capitoli_posseduti >= 1) {
            return $this->capitoli_posseduti * 5;
        } else {
            return NULL;
        }
        
    }

}

?>