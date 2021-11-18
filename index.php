<?php
interface str{
    public function __toString();
}
abstract class Figure implements str
{
    public function __toString(){
    return $this->getName() . " " . $this->getPerimeter() . " " . $this->getArea() ;
    }

    abstract public function getName();

    abstract public function getPerimeter();

    abstract public function getArea();
}
class Rectangle extends Figure{
    private $width;
    private $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getName()
    {
        return 'Прямоугольник';
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}
class Quadrate extends Figure {
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getName()
    {
        return 'Квадрат';
    }

    public function getPerimeter()
    {
        return $this->side * 4;
    }

    public function getArea()
    {
        return pow($this->side, 2);
    }
}

class Circle extends Figure
{
    private $radius;

    public function __construct($radius)
    {

        $this->radius = $radius;
    }

    public function getName()
    {
        return 'Круг';
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function getArea()
    {
        return 2 * pi() * pow($this->radius, 2);
    }
}

$Rectangle = new Rectangle(10,10);
$Quadrate = new Quadrate(10);
$Circle = new Circle(10);
echo $Rectangle . " | " . $Quadrate . " | ". $Circle;

