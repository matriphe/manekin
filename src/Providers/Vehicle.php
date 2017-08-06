<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\Base;

class Vehicle extends Base
{
    protected static $policeNumber = array(
        '{{areaCode}} # ?',
        '{{areaCode}} ## ?',
        '{{areaCode}} ### ?',
        '{{areaCode}} #### ?',
        '{{areaCode}} # ??',
        '{{areaCode}} ## ??',
        '{{areaCode}} ### ??',
        '{{areaCode}} #### ??',
        '{{areaCode}} # ???',
        '{{areaCode}} ## ???',
        '{{areaCode}} ### ???',
        '{{areaCode}} #### ???',
    );
    
    protected static $specialPoliceNumber = array(
        'RI #', 'RI ##', 'CD ##', 'CD ###',
    );
    
    /**
     * @link: https://id.wikipedia.org/wiki/Tanda_nomor_kendaraan_bermotor
     */
    protected static $areaCode = array(
        'BA', 'BB', 'BD', 'BE', 'BG', 'BH', 'BK', 'BL', 'BM', 'BN', 'BP', 
        'A', 'B', 'D', 'E', 'F', 'T', 'Z', 'G', 'H', 'K', 'R', 'AA', 'AB', 'AD',
        'L', 'M', 'N', 'P', 'S', 'W', 'AE', 'AG', 'DH', 'DK', 'DR', 'EA', 'EB',
        'ED', 'DA', 'KB', 'KH', 'KT', 'KU', 'DB', 'DC', 'DD', 'DL', 'DM', 'DN',
        'DP', 'DT', 'DW', 'DE', 'DG', 'PA', 'PB',
    );
    
    public static function areaCode()
    {
        return self::randomElement(self::$areaCode);
    }
    
    public function policeNumber()
    {
        return strtoupper(static::bothify($this->generator->parse(static::randomElement(static::$policeNumber))));
    }
    
    public function specialPoliceNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$specialPoliceNumber)));
    }
}
