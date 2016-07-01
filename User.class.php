<?
class User extends AUser{
   
    public $name;
    public $login;
    public $password;
    public static $cU=0;
    
    function getInfo(){
            echo "<p>Name: ".$this->name;
            echo "<br/>Login: ".$this->login;
            echo "<br/>Password: ".$this->password;
            echo "";
            }
    
    function __construct($n,$l,$p){   // __construct автозагрузчик 
    $this->name = $n;
    $this->login = $l;
    $this->password = $p; 
    ++self::$cU;
   }
    
    function __destruct(){
    echo "<br>".$this->name." deleted</br>";
    }
}
?>