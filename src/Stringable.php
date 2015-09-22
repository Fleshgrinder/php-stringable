<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2015 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Core;

/**
 * Defines the stringable interface.
 *
 * Objects that are able to represent themselves as strings are very common and useful. However, checking if an object
 * is actually implementing the method is not. This often leads to complicated conditions to check whether an object that
 * was passed as an argument is acceptable or not. This interface simply enforces a contract with all implementing
 * classes that they are actually implementing the magic method, hence, checking is very easy:
 *
 * ```php
 * if (is_string($argument) === false || ($string instanceof Stringable) === false) {
 *     throw new \InvalidArgumentException('Argument must be of type string or implement Stringable.');
 * }
 * ```
 */
interface Stringable {

    /**
     * Get the string representation of this object.
     *
     * @see https://secure.php.net/language.oop5.magic#object.tostring
     * @return string
     *   The string representation of this object.
     */
    public function __toString();

}
