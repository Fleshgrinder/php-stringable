<?php

namespace Fleshgrinder\Core;

/**
 * Wrapper for object, that can be represented as string, but not have interface
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class WrappedStringable implements Stringable
{
    /**
     * @var object Object that can be represented as string
     */
    private $object;

    /**
     * Constructor.
     *
     * @param object $object Object that can be represented as string
     */
    public function __construct($object)
    {
        if (!method_exists($object, '__toString')) {
            throw new \InvalidArgumentException('Object must implement __toString method');
        }

        $this->object = $object;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string)$this->object;
    }
}
