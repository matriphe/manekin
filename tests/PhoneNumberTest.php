<?php

namespace Matriphe\Manekin\Tests;

use Faker\Generator;
use Faker\Test\Provider\PhoneNumberTest as TestCase;
use Matriphe\Manekin\Providers\PhoneNumber;

class PhoneNumberTest extends Testcase
{
    private $faker;

    private $code = '(11|12|13|21|22|23|52|53|15|16|55|56|57|58|17|18|19|59|77|78|79|95|96|97|98|99|31|32|38|87|88|89)';

    public function setUp()
    {
        parent::setUp();

        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function testMobilePhoneNumberFormat()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->mobilePhoneNumber();
            $this->assertRegExp('/^08'.$this->code.'\s[0-9]{3,4}\s[0-9]{3,4}$/', $number);
        }
    }

    /**
     * @test
     */
    public function testE164MobilePhoneNumberFormat()
    {
        for ($i = 0; $i < 10; $i++) {
            $number = $this->faker->e164MobilePhoneNumber();
            $this->assertRegExp('/^\+628'.$this->code.'[0-9]{6,8}$/', $number);
        }
    }
}
