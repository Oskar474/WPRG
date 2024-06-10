<?php

trait Speed {
    public $speed;
    function increaseSpeed()
    {
        $this->speed += 10;
    }
    function decreaseSpeed()
    {
        $this->speed -= 10;
    }
}

Class Car {
    use Speed;
    function start()
    {
        $this->speed = 0;
        $this->increaseSpeed();
    }

    function getSpeed()
    {
        return $this->speed;
    }
}

?>

<?php
$car = new Car();
$car->start();
echo $car->getSpeed();
?>
