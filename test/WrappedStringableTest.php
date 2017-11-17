<?php

namespace Fleshgrinder\Core;

/**
 * WrappedStringableTest
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class WrappedStringableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     */
    public function testWrappedObject()
    {
        $string = 'string';
        $object = new ToStringDummy($string);
        $wrappedObject = new WrappedStringable($object);

        $this->assertEquals($string, (string)$wrappedObject);
        $this->assertEquals($string, strval($wrappedObject));
    }

    /**
     * Test
     *
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Object must implement __toString method
     */
    public function testWrappedObjectShouldThrowExceptionIfObjectNotImplementToStringFunction()
    {
        new WrappedStringable(new \stdClass());
    }
}
