<?php

namespace Matriphe\Manekin\Tests;

use Faker\Generator;
use Matriphe\Manekin\Providers\Identity;
use PHPUnit_Framework_TestCase;

class IdentityTest extends PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Identity($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function testNik()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->nik();
            $this->assertRegExp('/^[0-9]{16}$/', $number);
        }
    }

    /**
     * @test
     */
    public function testNikMale()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->nik('male');
            $this->assertRegExp('/^[0-9]{16}$/', $number);
            $this->assertTrue(substr($number, 6, 2) < 40);
        }
    }

    /**
     * @test
     */
    public function testNikFemale()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->nik('female');
            $this->assertRegExp('/^[0-9]{16}$/', $number);
            $this->assertTrue(substr($number, 6, 2) > 40);
        }
    }

    /**
     * @test
     */
    public function testSim()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->sim();
            $this->assertRegExp('/^[0-9]{12}$/', $number);
        }
    }

    /**
     * @test
     */
    public function testPassport()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->passport();
            $this->assertRegExp('/^[A-Z]{1}[0-9]{6,7}$/', $number);
        }
    }
}
