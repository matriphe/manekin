<?php

namespace Matriphe\Manekin\Tests;

use Faker\Generator;
use Matriphe\Manekin\Providers\Address;
use PHPUnit_Framework_TestCase;

class AddressTest extends PHPUnit_Framework_TestCase
{
    private $faker;

    private $minLatitude = -10.1718;
    private $maxLatitude = 5.88969;

    private $minLongitude = 95.31644;
    private $maxLongitude = 140.71813;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testLatitude()
    {
        $latitude = $this->faker->latitude();
        $this->assertInternalType('float', $latitude);
        $this->assertGreaterThanOrEqual($this->minLatitude, $latitude);
        $this->assertLessThanOrEqual($this->maxLatitude, $latitude);
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertInternalType('float', $longitude);
        $this->assertGreaterThanOrEqual($this->minLongitude, $longitude);
        $this->assertLessThanOrEqual($this->maxLongitude, $longitude);
    }

    public function testCoordinates()
    {
        $coordinate = $this->faker->localCoordinates();
        $this->assertInternalType('array', $coordinate);
        $this->assertInternalType('float', $coordinate['latitude']);
        $this->assertGreaterThanOrEqual($this->minLatitude, $coordinate['latitude']);
        $this->assertLessThanOrEqual($this->maxLatitude, $coordinate['latitude']);
        $this->assertInternalType('float', $coordinate['longitude']);
        $this->assertGreaterThanOrEqual($this->minLongitude, $coordinate['longitude']);
        $this->assertLessThanOrEqual($this->maxLongitude, $coordinate['longitude']);
    }
}
