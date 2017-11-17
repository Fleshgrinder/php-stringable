<?php

namespace Fleshgrinder\Core;

/**
 * Stringable object with callback as resource of string
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class CallbackStringable implements Stringable
{
    /**
     * @var callable Callback that returns string
     */
    private $callback;

    /**
     * Constructor
     *
     * @param callable $callback Callback that returns string
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        $f = $this->callback;

        return $f();
    }
}
