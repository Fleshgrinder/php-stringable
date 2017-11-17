<?php

namespace Fleshgrinder\Core;

/**
 * CallbackStringableTest
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class CallbackStringableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     */
    public function testCallback()
    {
        $string = 'string';
        $callback = function () use ($string) {
            return $string;
        };

        $callbackStringable = new CallbackStringable($callback);
        $this->assertEquals($string, (string)$callbackStringable);
        $this->assertEquals($string, strval($callbackStringable));
    }
}
