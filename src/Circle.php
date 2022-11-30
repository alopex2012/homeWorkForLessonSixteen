<?php

namespace App;
/**
 * Class Circle
 * @package App
 */
class Circle
{
    /**
     * Constant, expressing the ratio of the circumference of a circle to the length of its diameter
     */
    const PI = 3.1415926535;

    /**
     * @var int
     */
    private int $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Method returns area of circle
     * @return float
     */
    public function getSquare(): float
    {
        return round(self::PI * $this->radius ** 2, 2);
    }

    /**
     * Method returns circumference
     * @return float
     */
    public function getCircuit(): float
    {
        return round(2 * self::PI * $this->radius, 2);
    }

}