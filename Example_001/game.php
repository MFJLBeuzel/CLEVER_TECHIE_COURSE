<?php
class Game
{
    const BR = '<br />';
    //Properties:
    public $price;
    public $name;
    public $photo;
    public $dir = 'games/';

    //Methods:
    public function print_game()
    {
        //$this keyword is used to call properties and methods within class Game.
      //-> is used to acces properties and methods.
        echo "<div style='float: left; maring-right: 40px; '>";
        echo "<font size='5px'>{$this->name}</font>".self::BR;
        echo "<img src='{$this->dir}{$this->photo}'>".self::BR;
        echo '$'.$this->price;
        echo "</div>";
    }

    public function set_game($name, $price, $photo)
    {
        $this->name = $name;
        $this->price = $price;
        $this->photo = $photo;
    }
}

$game = new Game; //$game is the object instance of Game class.
                  //New keyword creates object instance of the class.
$game->name = 'Bioshock Infinite';
$game->price = 14.99;
$game->photo = 'bioshock-infinite.jpg';

$game->print_game();

$game->set_game('Overwatch', 44.99, 'overwatch.jpg');

$game->print_game();
