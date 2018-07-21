<?php

namespace Matriphe\Manekin\Tests;

use Faker\Generator;
use Matriphe\Manekin\Providers\Miscellaneous;
use PHPUnit_Framework_TestCase;

class MiscellaneousTest extends PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Miscellaneous($faker));
        $this->faker = $faker;
    }

    public function testRandomAlphaNumeric()
    {
        $alphanum = $this->faker->randomAlphaNumeric();

        $this->assertGreaterThan(0, strlen($alphanum));
        $this->assertRegExp('/^[A-Z0-9]{'.strlen($alphanum).'}$/', $alphanum);

        $alphanum = $this->faker->randomAlphaNumeric(16);

        $this->assertSame(16, strlen($alphanum));
        $this->assertRegExp('/^[A-Z0-9]{16}$/', $alphanum);
    }
}
