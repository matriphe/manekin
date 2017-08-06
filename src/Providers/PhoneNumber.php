<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\id_ID\PhoneNumber as FakerPhoneNumber;

class PhoneNumber extends FakerPhoneNumber
{
    protected static $mobilePhoneFormats = [
        // mobile numbers
        '08{{operatorCode}} ### ###',   // 0811 XXX XXX, 10 digits, very old
        '08{{operatorCode}} #### ###',  // 0811 XXXX XXX, 11 digits
        '08{{operatorCode}} #### ####', // 0811 XXXX XXXX, 12 digits
    ];

    protected static $e164MobilePhoneFormats = [
        // mobile numbers
        '+628{{operatorCode}}######',   // 0811 XXX XXX, 10 digits, very old
        '+628{{operatorCode}}#######',  // 0811 XXXX XXX, 11 digits
        '+628{{operatorCode}}########', // 0811 XXXX XXXX, 12 digits
    ];

    public static function operatorCode()
    {
        $numbers = [
            '11', '12', '13', '21', '22', '23', '52', '53', // Telkomsel
            '15', '16', '55', '56', '57', '58', // Indosat
            '17', '18', '19', '59', '77', '78', '79', // XL
            '95', '96', '97', '98', '99', // Tri
            '31', '32', '38', // Axis
            '87', '88', '89', // Smartfren
        ];

        return self::randomElement($numbers);
    }

    public function mobilePhoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$mobilePhoneFormats)));
    }

    public function e164MobilePhoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$e164MobilePhoneFormats)));
    }
}
