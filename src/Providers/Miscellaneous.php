<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\Miscellaneous as FakerMiscellaneous;

class Miscellaneous extends FakerMiscellaneous
{
    public static function randomAlphaNumeric($length = null)
    {
        if (empty($length)) {
            $length = static::randomDigitNotNull();
        }

        return static::regexify('[A-Z0-9]{'.$length.'}');
    }
}
