<?php

namespace Respect\Validation\Rules;

class MyCustomValidator extends \Respect\Validation\Rules\AbstractRule
{
    public function validate($input)
    {
        if (strlen($input) < 15) {
            return true;
        }
        return false;
    }
}
