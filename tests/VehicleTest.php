<?php

namespace Matriphe\Manekin\Tests;

use Faker\Generator;
use Matriphe\Manekin\Providers\Vehicle;
use PHPUnit_Framework_TestCase;

class VehicleTest extends PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Vehicle($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function testPoliceNumber()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->policeNumber();
            $this->assertRegExp('/^[A-Z]{1,2}\s[0-9]{1,4}\s[A-Z]{1,3}$/', $number);
        }
    }

    /**
     * @test
     */
    public function testSpecialPoliceNumber()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->specialPoliceNumber();
            $this->assertRegExp('/^(RI|CD)\s[0-9]{1,3}$/', $number);
        }
    }
}
