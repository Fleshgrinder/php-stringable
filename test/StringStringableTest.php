<?php

namespace Fleshgrinder\Core;

/**
 * StringStringableTest
 *
 * @author Nikita Sapogov <amstaffix@gmail.com>
 */
class StringStringableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     *
     * @dataProvider dataProviderForStrings
     *
     * @param string $string String
     */
    public function testStrings($string)
    {
        $object = new StringStringable($string);

        $this->assertEquals($string, (string)$object);
        $this->assertEquals($string, strval($object));
    }

    /**
     * Data provider
     *
     * @return array Data
     */
    public function dataProviderForStrings()
    {
        return [
            [''],
            ['2'],
            ['string'],
            ['another string']
        ];
    }
}
