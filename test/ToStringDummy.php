<?php

namespace Fleshgrinder\Core;

/**
 * To string dummy class
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class ToStringDummy
{
    /**
     * @var string String
     */
    private $string;

    /**
     * Constructor.
     *
     * @param $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * String representation of object
     *
     * @return string String
     */
    public function __toString()
    {
        return $this->string;
    }
}
