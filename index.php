<?php
$kip = new Kip();
$varken = new Varken();
$mais = new Mais();

$kinderboerderij = new Kinderboerderij();
$kinderboerderij->voerronde($kip);
//$kinderboerderij->voerronde($mais);
$kinderboerderij->voerronde($varken);

//$kip->eten();
//$kip->naam = "Dagobert";
//echo $kip->naam;


class Kinderboerderij{
    public function voerronde(Dier $dier){
        echo "We doen een voerronde";
    }
}
class Mais{}
abstract class Dier{
    public $naam;
    public $dieet;
    public $carnivoor;
    public function eten(){
        echo "eten ".$this->naam;
    }

    
}
class Kip extends Dier{    
}

class Varken extends Dier{    
}
