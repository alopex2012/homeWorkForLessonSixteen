<?php

namespace App;
/**
 * Class User
 * @package App
 */
class User
{
    /**
     * @var int
     */
    private static int $count = 0;

    /**
     * @var string
     */
    public string $name;

    /**
     * User constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        self::$count++;
    }

    /**
     * Method returns number of class objects created
     * @return int
     */
    public static function getCount(): int
    {
        return self:: $count;
    }

}