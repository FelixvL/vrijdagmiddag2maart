<?php

class Student{
    public $voornaam;
    public $achternaam;
    public $leeftijd;

    public function __construct() {
        echo "DEZE METHODE";
    }
    
    public function voorstellen(Student $jaap){
        echo "Hoi, mijn naam is ".$this->voornaam." ".$this->achternaam." en ik ben ".$this->leeftijd." oud.<br>";
        echo self::$testvar;
        echo $jaap->voornaam;
    }
    static function kort(){
        echo self::$testvar;
    }
    static $testvar =34;
    
}

