<?php

class User
{
    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}
class Builder extends User
{
    public static $counter = 0;
    public static function counter()
    {
        echo ("Число пользователей: ". ++self::$counter . "<br/>");
    }

}
$builder = new Builder();
$builder::counter();
