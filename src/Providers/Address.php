<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\id_ID\Address as FakerAddress;

class Address extends FakerAddress
{
    protected static $addressFormats = array(
        '{{streetAddress}}, {{city}}, {{state}}, {{postcode}}',
        '{{streetAddress}}, {{city}}, {{postcode}}',
        '{{streetAddress}}, {{city}}, {{state}}',
        '{{streetAddress}}, {{city}}',
    );

    protected static $buildingNumber = array(
        '#', '##', '##?', '?##', '??##', '?-#', '?-##', '?-###', '?/#', '??/##'
    );
    
    protected static $streetAddressFormats = array(
        '{{streetPrefix}} {{street}} No. {{buildingNumber}}',
        '{{streetPrefix}} {{street}} Blok. {{buildingNumber}}',
    );
    
    protected static $postcode = array();
    
    /**
     * @link https://id.wikipedia.org/wiki/Daftar_jalan_di_Kota_Surakarta
     **/
    protected static $street = [
        'Ahmad Yani', 'Agus Salim', 'Bhayangkara', 'Gajah Mada', 'Honggowongso',
        'Cokroaminoto', 'Juanda', 'Katamso', 'M.T. Haryono', 'Monginsidi',
        'Mulyadi', 'Muwardi', 'Panjaitan', 'R.M. Said', 'Rajiman',
        'Ronggowarsito', 'S. Parman', 'Sudiarto', 'Sugiono', 'Sumpah Pemuda',
        'Sutami', 'Sutan Syahrir', 'Sutarto', 'Sutoyo', 'Tentara Pelajar',
        'Urip Sumoharjo', 'Veteran', 'Wahidin Sudirohusodo', 'Yos Sudarso',
        'Abdul Muis', 'Abdul Rahmat', 'Adisucipto', 'Adisumarmo', 'Ahmad Dahlan',
        'Arifin', 'Cokroaminoto', 'Cut Nyak Dien', 'Dewi Sartika', 'Diponegoro',
        'Gatot Subroto', 'Gotong Royong', 'Gremet', 'Hasanuddin', 'Imam Bonjol',
        'Jayawijaya', 'K.H. Maskur', 'Karel S. Tubun', 'Kartini',
        'Kebangkitan Nasional', 'Ketandan', 'Ki Hajar Dewantara', 'Krakatau',
        'Kusmanto', 'Kyai Gede', 'Lumban Tobing', 'Moch. Yamin', 'Pattimura',
        'Perintis Kemerdekaan', 'R.E. Martadinata', 'Raden Saleh', 'Reksoninten',
        'Sam Ratulangi', 'Samanhudi', 'Sampangan', 'Setia Budi', 'Sugiyopranoto',
        'Suharso', 'Sunaryo', 'Supomo', 'Supono', 'Suprapto', 'Suryo',
        'Suryo Pranoto', 'Sutarjo', 'Tangkuban Perahu', 'Teuku Umar', 'Thamrin',
        'Untung Suropati', 'Wahid Hasyim', 'Wora Wari', 'Yohanes', 'Yosodipuro',

    ];

    protected static $streetPrefix = [
        'Gg.', 'Jl.',
    ];

    protected static $stateAbbr = [
       'Aceh', 'Sumut', 'Sumbar', 'Jambi', 'Babel', 'Riau', 'Kepri', 'Bengkulu', 'Sumsel',
       'Lampung', 'Banten', 'DKI', 'Jabar', 'Jateng', 'Jatim', 'NTT', 'DIY',
       'Bali', 'NTB', 'Kalbar', 'Kalteng', 'Kalsel', 'Kaltim', 'Kalut', 'Sulsel',
       'Sulut', 'Gorontalo', 'Sulteng', 'Sulbar', 'Sultra', 'Maluku', 'Malut',
       'Papbar', 'Papua',
    ];

    /**
     * @link: http://latitudelongitude.org/id/
     */
     
    /**
     * Get Latitude.
     * 
     * @access public
     * @static
     * @param float $min (default: -10.1718)
     * @param float $max (default: 5.88969)
     * @return void
     */
    public static function latitude($min = -10.1718, $max = 5.88969)
    {
        return (float) static::randomFloat(6, $min, $max);
    }

    /**
     * Get Longitude.
     * 
     * @access public
     * @static
     * @param float $min (default: 95.31644)
     * @param float $max (default: 140.71813)
     * @return void
     */
    public static function longitude($min = 95.31644, $max = 140.71813)
    {
        return (float) static::randomFloat(6, $min, $max);
    }
    
    /**
     * Get postal code.
     * 
     * @link: http://www.nomor.net/_kodepos.php?_i=provinsi-kodepos&daerah=&jobs=&perhal=60&urut=&asc=000011111&sby=000000
     * @access public
     * @static
     * @return void
     */
    public static function postcode()
    {
        return static::randomElement([
            mt_rand(80111, 82262), mt_rand(33111, 33791), mt_rand(15111, 15820),
            mt_rand(42111, 42455), mt_rand(38113, 39374), mt_rand(55111, 55893),
            mt_rand(10110, 14530), mt_rand(96111, 96585), mt_rand(36111, 37573),
            mt_rand(16110, 17730), mt_rand(40111, 46475), mt_rand(50111, 59583),
            mt_rand(60111, 69493), mt_rand(78111, 79682), mt_rand(70111, 72275),
            mt_rand(73111, 74874), mt_rand(75111, 77381), mt_rand(77111, 77573),
            mt_rand(29111, 29875), mt_rand(34111, 35686), mt_rand(97114, 97668),
            mt_rand(97711, 97863), mt_rand(23111, 24791), mt_rand(83115, 84458),
            mt_rand(85111, 87284), mt_rand(98111, 99974), mt_rand(98311, 98662),
            mt_rand(28111, 29566), mt_rand(91311, 96365), mt_rand(90111, 92985),
            mt_rand(94111, 94976), mt_rand(93111, 93958), mt_rand(95111, 95999),
            mt_rand(25111, 27779), mt_rand(30111, 32387), mt_rand(20111, 22998),
        ]);
    }
    
    public static function buildingNumber()
    {
        return strtoupper(static::bothify(static::randomElement(static::$buildingNumber)));
    }
    
    public static function country()
    {
        return 'Indonesia';
    }
}
