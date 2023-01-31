<?php
//example to learn oop in php
class Player{
    // properties
    public $name;
    public $speed = 3;
    public $running = false;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function run(){
         $this->running=true;
    }
    function stoprun(){
         $this->running=false;
    }
}


echo "Lets understand OOPs using GTA Vice City <br>";
$player1 = new Player();
$player1->set_name("Upendra");
echo $player1->get_name()."<br>";

$player2 = new Player();
$player2->set_name("AKash");
echo $player2->get_name() ."<br>";

$player3 = new Player();
$player3->set_name("Denish");
echo $player3->get_name()."<br>";

?>