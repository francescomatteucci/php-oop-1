<?php

class Production {
    public $title;
    public $lang;
    public $vote;
    public $img;
    private $variabile;

    function __construct(string $title, string $lang, int $vote, string $img,) {
        $this->title = $title;
        $this->lang = $lang;
        $this->voteMax($vote);
        $this->img = $img;

    }

    function voteMax(string $vote) {    
        if ($vote > 0 && $vote < 11) {
            $this->vote = $vote;
        } else {
            var_dump("Inserisci un voto da 1 a 10");
        }
    }

}


class TVSerie extends Production {
    //
    public $seasons;
    function __construct(string $title,string $lang,int $vote, string $img, int $seasons) {
        parent::__construct($title, $lang, $vote,$img);
        $this-> seasons = $seasons;
    }
    
}




class Movie extends Production {
    public $profits;
    public $duration;

    function __construct(string $title,string $lang, float $vote, string $img, int $profits, int $duration) {
        parent::__construct($title, $lang, $vote,$img);
        $this-> profits = $profits;
        $this-> duration = $duration;

    }
}


$product1 = new Production('Mela', 'IT', 4,'https://www.my-personaltrainer.it/images/hd/mela.jpg');
$product2 = new Production('Banana', 'IT', 8,'https://www.my-personaltrainer.it/2020/04/08/proprieta-banane-orig.jpeg');
$black_mirror = new TVSerie('Black Mirror', 'IT', 8, 'https://upload.wikimedia.org/wikipedia/it/2/21/Black_mir.png' ,6);
$interstellar = new Movie('Gotham', 'IT', 9.5, 'https://i.ebayimg.com/images/g/ls0AAOSwKzViNuve/s-l1200.webp',16000000, 120);
// var_dump($product1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div><img src="<?php echo $product1->img ?>" alt=""></div>
    <div>Title:<?php echo $product1->title ?></div>
    <div>Language:<?php echo $product1->lang ?></div>
    <div>Vote:<?php echo $product1->vote ?></div>

    <div><img src="<?php echo $product2->img ?>" alt=""></div>
    <div>Title:<?php echo $product2->title ?></div>
    <div>Language:<?php echo $product2->lang ?></div>
    <div>Vote:<?php echo $product2->vote ?></div>


    <div><img src="<?php echo $black_mirror->img ?>" alt=""></div>
    <div>Title:<?php echo $black_mirror->title ?></div>
    <div>Language:<?php echo $black_mirror->lang ?></div>
    <div>Vote:<?php echo $black_mirror->vote ?></div>
    <div>Seasons:<?php echo $black_mirror->seasons ?></div>


    <div><img src="<?php echo $interstellar->img ?>" alt=""></div>
    <div>Title:<?php echo $interstellar->title ?></div>
    <div>Language:<?php echo $interstellar->lang ?></div>
    <div>Vote:<?php echo $interstellar->vote ?></div>
    <div>Profits:<?php echo $interstellar->profits ?> €</div>
    <div>Duration:<?php echo $interstellar->duration ?> minuti</div>


</body>
</html>