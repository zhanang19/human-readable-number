# Human Readable Number
This package will provide a simple helper to format a number into a human friendly number

## Installation
Run command `composer require zhanang19/human-readable-number` to install this package

> This package is tested only in Laravel 7

## Usage
Only one parameter needed, the number. Parameter accepted type is string, float, and int. There is 3 ways to use this package:
 1. Calling static method
    ```php
    \Zhanang19\HumanReadableNumber\HumanReadableNumber::format(123); // 123
    \Zhanang19\HumanReadableNumber\HumanReadableNumber::format(12300); // 12K+
    ```
 2. Use a helper function
    ```php
    readablenumber(12312); // 12K+
    ```
 3. Use blade directive
    ```php
    // view.blade.php
    @readableNumber(12312) // 12K+
    ```

## Todo
- [ ] Implement more than 0 digits after decimal point
- [ ] Add unit test

# Support
- [Buy me a coffee](https://www.buymeacoffee.com/zhanang19)
