<?php
abstract class abstraktiImone {
    protected $vadovai = [];
    protected $Programuotojai = [];
    protected $Testuotojai = [];
    function __construct($vardas1, $vardas2, $vardas3) {
        array_push($this->vadovai, $vardas1);
        array_push($this->Programuotojai, $vardas2);
        array_push($this->Testuotojai, $vardas3);
    }
   

    public static function Apring(){
        echo "<br>";
        echo "Programa prasideda";
        echo "<br>";
    }

    abstract function gautiDarbuotojus();
    abstract function pridetiDarbuotoja($vardas);

}

class Imone extends abstraktiImone{
    public function pridetiDarbuotoja($vardas){}
     public function gautiDarbuotojus(){
        echo "<br>";
        echo "Vadovai: ";
        print_r([$this->vadovai,$this->Programuotojai, $this->Testuotojai]);
     }
    
}

class Vadovai extends Imone{

    public function gautiDarbuotojus(){
        echo "<br>";
        echo "Vadovai: ";
        print_r($this->vadovai);
    }
    
   public function pridetiDarbuotoja($vardas){
        echo "<br>";
        echo "Pridėtas:".$vardas;
        array_push($this->vadovai, $vardas);
    }
    
}

class Programuotojai extends Imone{
   public function gautiDarbuotojus(){
        echo "<br>";
        echo "Programuotojai: ";
        print_r($this->Programuotojai);
    }

     public function pridetiDarbuotoja($vardas){
        echo "<br>";
        echo "Pridėtas:".$vardas;
        array_push($this->Programuotojai, $vardas);
    }

}

class Testuotojai extends Imone{
    public function gautiDarbuotojus(){
        echo "<br>";
        echo "Testuotojai: ";
        print_r($this->Testuotojai);
    }

      public function pridetiDarbuotoja($vardas){
        echo "<br>";
        echo "Pridėtas:".$vardas;
        array_push($this->Testuotojai, $vardas);
    }

}


