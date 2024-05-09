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
$product2 = new Production('Banana', 'IT', 8);
// var_dump($product1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Title:<?php echo $product1->title ?></div>
    <div>Language:<?php echo $product1->lang ?></div>
    <div>Vote:<?php echo $product1->vote ?></div>

    <div>Title:<?php echo $product2->title ?></div>
    <div>Language:<?php echo $product2->lang ?></div>
    <div>Vote:<?php echo $product2->vote ?></div>
</body>
</html>