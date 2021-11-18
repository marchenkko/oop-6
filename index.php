<?php

class User
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        echo "Initialising the object... \n";
        $this->name = $name;
        $this->age = $age;

    }
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->getName();
    }

    public function __destruct(){
        echo "Destroying Object... \n";
    }
}
$user1 = new User('Mike', 19);
echo 'Name: ' . $user1->getName() . ', Age: ' . $user1->getAge() . "\n";




