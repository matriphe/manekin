<?php

namespace Matriphe\Manekin\Tests;

use DateTime;
use Faker\Generator;
use Matriphe\Manekin\Providers\DateTime as ManekinDateTime;
use PHPUnit_Framework_TestCase;

class DateTimeTest extends PHPUnit_Framework_TestCase
{
    private $faker;

    private $minAge = 13;
    private $maxAge = 60;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new ManekinDateTime($faker));
        $this->faker = $faker;
    }

    public function testBirtDate()
    {
        $birthDate = $this->faker->birthDate($this->minAge, $this->maxAge);

        $this->assertInstanceOf('DateTime', $birthDate);
        $this->assertGreaterThanOrEqual(new DateTime('-'.$this->maxAge.' year'), $birthDate);
        $this->assertLessThanOrEqual(new DateTime('-'.$this->minAge.' year'), $birthDate);
    }
}
