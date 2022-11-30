<?php

namespace App;

/**
 * Class User
 * @package App
 */
class User
{
    /**
     * Number of class objects created
     * @var int $count
     */
    private static int $count = 0;

    /**
     * Class object name value
     * @var string $name
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