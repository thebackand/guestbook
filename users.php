<?php

function __autoload($name){
    include $name.'.class.php';
}


$user1 = new User('Mad Rubiy','Mad', '111111');
$user1->getInfo();

$user2 = new User('John Rubiy','John', '222222');
$user2->getInfo();

$user3 = new User('Ivan Rubiy','Ivan', '333333');
$user3->getInfo();


$SUser = new SuperUser('Vasya Pupkin', 'Vasya', '999999', 'admin');
$SUser1 = new SuperUser('Vasya Pupkin', 'Vasya', '999999', 'admin');

$SUser->getInfo();
echo '<hr>';
    echo 'All default USER:' . User::$cU.'<br>';
    echo 'All admin:' .SuperUser::$cS.'<br>';
echo '<hr>';

?>
