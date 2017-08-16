<?php

namespace Matriphe\Manekin\Tests;

use Faker\Generator;
use Matriphe\Manekin\Providers\Device;
use PHPUnit_Framework_TestCase;

class DeviceTest extends PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Device($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function testImei()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->imei();
            $this->assertRegExp('/^[0-9]{16}$/', $number);
        }
    }

    /**
     * @test
     */
    public function testIccid()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->iccid();
            $this->assertRegExp('/^[0-9]{19}[0-9A-Z]?$/', $number);
        }
    }

    /**
     * @test
     */
    public function testImsi()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->imsi();
            $this->assertRegExp('/^[0-9]{15}$/', $number);
        }
    }

    /**
     * @test
     */
    public function testAndroidDeviceId()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->androidDeviceId();
            $this->assertRegExp('/^[0-9A-F]{16}$/', $number);
        }
    }
}
