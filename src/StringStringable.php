<?php

namespace Fleshgrinder\Core;

/**
 * Simple string as stringable object
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class StringStringable implements Stringable
{
    /**
     * @var string String
     */
    private $string;

    /**
     * Constructor
     *
     * @param string $string String
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->string;
    }
}
