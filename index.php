<?php
//echo 'hello'; test commit and push
class User
{
    public $name;
    public $age;
    public $sex;
}

$user1 = new User();
$user1->name = 'Dima';
$user1->age = 20;
$user1->sex = 'male';

$user2 = new User();
$user2->name = 'Marina';
$user2->age = 15;
$user2->sex = 'female';

$user3 = new User();
$user3->name = 'Artem';
$user3->age = 31;
$user3->sex = 'male';

echo 'name: ' . $user1->name . ', age: ' . $user1->age . ', sex: ' . $user1->sex . "\n";
echo 'name: ' . $user2->name . ', age: ' . $user2->age . ', sex: ' . $user2->sex . "\n";
echo 'name: ' . $user3->name . ', age: ' . $user3->age . ', sex: ' . $user3->sex . "\n";
