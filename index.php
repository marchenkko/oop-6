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


class Worker extends User
{

private $salary;

public function setSalary($salary) {
    $this->salary = $salary;
}
public function getSalary() {
    return $this->salary;
}
}


class Student extends Worker
{
    private $stipendia;
    private $kyrs;


    public function getStipendia()
    {
        return $this->stipendia;
    }

    public function setStipendia($stipendia)
    {
        $this->stipendia = $stipendia;
    }
    public function getKyrs()
    {
        return $this->kyrs;
    }

    public function setKyrs($kyrs)
    {
        $this->kyrs = $kyrs;
    }
}

class Driver extends Student{
    private $driving, $category;
    public function setDriving($driving){
        $this->driving = $driving;
    }

    public function getDriving(){
        return $this->driving;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }
}
$ivan = new Driver();
$ivan->setName('Ivan');
$ivan->setAge(18);
$ivan->setSalary(1000);
$ivan->setStipendia(500);
$ivan->setDriving(0);
$ivan->setCategory('B');

$vasya = new Driver();
$vasya->setName('Vasya');
$vasya->setAge(20);
$vasya->setSalary(2000);
$vasya->setStipendia(1000);
$vasya->setDriving(2);
$vasya->setCategory('B');

$allsalary = $ivan->getSalary()+$vasya->getSalary();
echo $allsalary;
