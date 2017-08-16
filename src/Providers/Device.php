<?php

namespace Matriphe\Manekin\Providers;

use Faker\Calculator\Luhn;
use Faker\Provider\Base;

class Device extends Base
{
    /**
     * IMEI Format
     *
     * @link https://en.wikipedia.org/wiki/International_Mobile_Equipment_Identity#Structure_of_the_IMEI_and_IMEISV_.28IMEI_software_version.29
     */
    protected static $imeiFormat = '{{RBI}}{{TAC}}{{FAC}}{{SNR}}{{SVN}}';

    /**
     * IMSI Format
     *
     * @link https://en.wikipedia.org/wiki/International_mobile_subscriber_identity
     */
    protected static $imsiFormat = '{{MCC}}{{MNC}}{{MSIN}}';

    /**
     * ICCID Format
     *
     * @link https://www.emnify.com/2016/05/06/emnify-8988303-iccid-iin-and-sim-serial-number-explained/
     */
    protected static $iccidFormat = '{{MM}}{{CC}}{{MNC}}{{SIM}}{{ATICCID}}';

    /**
     * Reporting Body Identifier.
     *
     * @link https://en.wikipedia.org/wiki/Reporting_Body_Identifier
     */
    public static function RBI()
    {
        return self::randomElement([
            '00', // Test IMEI
            '01', // PTCRB - USA
            '02', '03', '04', '05', '06', '07', '08', '09', // Test IMEI
            '10', // DECT
            '30', // Irridium - USA
            '33', // DGPT - France
            '35', // Comreg - Ireland
            '44', // BABT - UK
            '45', // NTA - Denmark
            '49', // BZT/BAPT - Germany
            '50', // BZT ETS - Germany
            '51', // Cetecom ICT - Germany
            '52', // Cetecom - Germany
            '53', // TÜV - Germany
            '54', // Phoenix Test Lab - Germany
            '86', // TAF - China
            '91', // MSAI - India
            '98', // BABT - UK
            '99', // GHA
        ]);
    }

    /**
     * Type Allocation Code.
     *
     * @access public
     */
    public static function TAC()
    {
        return self::numerify('####');
    }

    /**
     * Final Assembly Code.
     *
     * @access public
     */
    public static function FAC()
    {
        return self::numerify('##');
    }

    /**
     * Serial Number.
     *
     * @access public
     */
    public static function SNR()
    {
        return self::numerify('######');
    }

    /**
     * Software Version Number.
     *
     * @access public
     */
    public static function SVN()
    {
        return self::numerify('##');
    }

    /**
     * Mobile Country Code, Indonesia: 510.
     *
     * @access public
     * @link https://en.wikipedia.org/wiki/Mobile_country_code#Indonesia_-_ID
     */
    public static function MCC()
    {
        return '510';
    }

    /**
     * Mobile Network Code.
     *
     * @access public
     */
    public static function MNC()
    {
        return self::randomElement([
            '00', '01', '03', '07', '08', '09', '10', '11', '20', '21', '27',
            '28', '88', '89', '99',
        ]);
    }

    /**
     * Mobile Subscription Identification Number .
     *
     * @access public
     * @link https://en.wikipedia.org/wiki/Mobile_identification_number
     */
    public static function MSIN()
    {
        return self::numerify('##########');
    }

    /**
     * ISO 7812 Major Industry Identifier.
     *
     * @access public
     * @link https://en.wikipedia.org/wiki/ISO/IEC_7812
     */
    public static function MM()
    {
        return '89';
    }

    /**
     * Country Code.
     *
     * @access public
     * @link https://en.wikipedia.org/wiki/List_of_country_calling_codes
     */
    public static function CC()
    {
        return '62';
    }

    /**
     * SIM Number and Checksum.
     *
     * @access public
     */
    public static function SIM()
    {
        $number = self::numerify('############');
        $checksum = (new Luhn())->computeCheckDigit($number);

        return $number.$checksum;
    }

    /**
     * An extra 20th digit is returned by the 'AT!ICCID?'.
     *
     * @access public
     * @link https://en.wikipedia.org/wiki/ISO/IEC_7812
     */
    public static function ATICCID()
    {
        return self::regexify('[0-9A-F]?');
    }

    /**
     * Return the IMEI.
     *
     * @access public
     */
    public function imei()
    {
        return $this->generator->parse(static::$imeiFormat);
    }

    /**
     * Return the IMSI.
     *
     * @access public
     */
    public function imsi()
    {
        return $this->generator->parse(static::$imsiFormat);
    }

    /**
     * Return the ICCID.
     *
     * @access public
     */
    public function iccid()
    {
        return $this->generator->parse(static::$iccidFormat);
    }

    /**
     * Return Android Device ID.
     *
     * @access public
     */
    public function androidDeviceId()
    {
        return static::regexify('[0-9A-F]{16}');
    }
}
