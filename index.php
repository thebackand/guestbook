<?php
class A{
    private $_name;
    private $_age;
function __set($n, $v){
    switch($n){
        case '_name': $this->_name=$v; break;
        case '_age': $this->_age=$v; break;
        default: throw new Exception('ERROR!');
    }
    
}
    function __get($n){
    switch($n){
        case '_name': return $this->_name; break;
        case '_age': return $this->_age; break;
        default: throw new Exception('ERROR!');
    }
    
}
    function __call($n, $args){}
}
$x=new A();
$x->_name = 'serj';
echo $x->_name;
$x->foo();


/*
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
*/
?>