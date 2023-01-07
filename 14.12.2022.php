<?php
class Game {
    const BR = '<br />';
     var $price;
     var $name;
     var $photo;
    


     public function print_game() {
        echo "<div style='float:left;margin-right:40px;'>";
        echo "<p style='font-size:30px'>{$this->name}</p>".self::BR;
        echo "<img style='width:30%' src={$this->photo}>".self::BR;
        echo ""
        echo "</div>";

     }
   
}
$game= New Game;
$game->name ='haneen';
$game->price =15 ;
$game->photo = 'footer-bg.jpg';


$game->print_game();