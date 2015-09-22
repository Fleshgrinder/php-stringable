# Stringable
Interface for easy identification of classes that implement PHP’s magic
 [`__toString`](https://secure.php.net/language.oop5.magic#object.tostring) method.

Provided is the interface itself that establishes the contract that implementing classes have to have the magic method.
 As well as a dummy class that can be used in tests as a substitute for doubles, stubs, or mocks.

## Installation
Open a terminal, enter your project directory and execute the following command to add this package to your
 dependencies:

```bash
$ composer require fleshgrinder/stringable
```

This command requires you to have Composer installed globally, as explained in the
 [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

## Usage
> **IMPORTANT**  
> You cannot throw any exceptions in a `__toSring` method due to Zend engine limitations. Please vote and comment on the
> [this PHP request](https://bugs.php.net/bug.php?id=53648) and lets hope this will be fixed.

Simply implement the interface and PHP’s magic `__toString` method.

```php
class YourClass implements Stringable {

    /**
     * @inheritDoc
     */
    public function __toString() {
        return '';
    }

}
```

## License
[![MIT License](https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/License_icon-mit.svg/48px-License_icon-mit.svg.png)](https://opensource.org/licenses/MIT)
