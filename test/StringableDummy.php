<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2015 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Core;

/**
 * Defines the stringable dummy class.
 *
 * This class is provided for tests that want to verify that something accepts or is able to handle instances that
 * implement the magic `__toString` method. This class does not contain any logic and the string that is returned by the
 * magic method is simply a public property that can be altered by anyone. The magic method performs and additional
 * string cast, to ensure that the data from that public property is actually a string. However, no additional checks
 * are performed and correct usage is up to you.
 *
 * This class is final because nobody should ever extend it, instead implement the {@see Stringable} interface.
 */
final class StringableDummy implements Stringable {

    /**
     * The string that should be returned by this instance.
     *
     * @var string
     */
    public $string;

    /**
     * Construct new stringable dummy instance.
     *
     * @param string|Stringable $string [optional]
     *     String that should be returned by this instance.
     */
    public function __construct($string = '') {
        $this->string = $string;
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return (string) $this->string;
    }

}
