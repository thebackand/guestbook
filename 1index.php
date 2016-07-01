<?php



Class Animal{
 public $name;
public $age=14;
    function say($value){
        echo $this->name." ". $value;
        $this->satBr();
    }
    function satBr(){
        echo "<br/>";
    }
};

$cat = new Animal();
$dog = new Animal;
    $cat->name="kotenok";
    $dog->name="sobachka";


echo $cat->say('may');
echo $dog->say('gav');
?>