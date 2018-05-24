<?php

class Slime {
    public static $type = 'スライム';
    
    public $suffix = '';
    public $hp = 1;
    public $power = 1;
    public $color = 1;

    function __construct($suffix,$hp,$power,$color) {
        $this->suffix = $suffix;
        $this->hp = $hp;
        $this->power = $power;
        $this->color = $color;
    }

    function name() {
        return self::$type. $this->suffix;
    }
    
     function description() {
        print self::name(). 'が出現した' . PHP_EOL;
         print 'HPが'.$this->hp.'POWERが'.$this->power.'Colorが'.$this->color.PHP_EOL;
    }
    
    

    
   
}
 
$slime_A=new Slime('A',10,30,'pink');
 
$slime_A->description();



