<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$user1 = new User();
$user1->setName('Ivan');
$user1->setAge(18);

$user2 = new User();
$user2->setName('Nikita');
$user2->setAge(28);

$user1 = (array) $user1 ;
$user2 = (array) $user2 ;
$users = [$user1,$user2];

$user_1 = new Control();
$user_1->filter($users);
var_dump((array) $user_1);

