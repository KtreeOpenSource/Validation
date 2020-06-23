<?php

namespace Respect\Validation\Exceptions;

class MyCustomValidatorException extends ValidationException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::STANDARD => '{{name}} must ... ', // eg: must be string
        ),
        self::MODE_NEGATIVE => array(
            self::STANDARD => '{{name}} must not ... ', // eg: must not be string
        )
    );
}
