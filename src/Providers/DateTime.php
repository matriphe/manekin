<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\DateTime as FakerDateTime;

class DateTime extends FakerDateTime
{
    public static function birthDate($minAge = 13, $maxAge = 100, $timezone = null)
    {
        return static::dateTimeBetween('-'.$maxAge.' year', '-'.$minAge.' year', $timezone);
    }
}
