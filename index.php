<?php

class Production {
    public $title;
    public $lang;
    public $vote;

    function __construct($title, $lang, $vote) {
        $this->title = $title;
        $this->lang = $lang;
        $this->voteMax($vote);
    }

    function voteMax($vote) {    
        if ($vote > 0 && $vote < 10) {
            $this->vote = $vote;
        } else {
            echo "Inserisci un voto da 1 a 10";
        }
    }
}

$product1 = new Production('Mela', 'IT', 4);
var_dump($product1);

?>