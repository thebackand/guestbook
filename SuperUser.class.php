<?
class SuperUser extends User implements ISuperUser{
    public $role;
    public static $cS=0;
    
    function __construct($n,$l,$p,$r){
        parent::__construct($n,$l,$p);
        $this->role=$r;
        ++self::$cS;
        --parent::$cU;
            }
            function getInfo(){
            parent::getInfo();
            echo "<br>Role: ".$this->role."<br/>";
            }
       function showInfo(){  //свойства объекта в массив
            $arr = array();
            foreach($this as $k=>$v){
                $arr[$k] = $v;
                return $arr;
            }
                
        }
    }
?>