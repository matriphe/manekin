<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\id_ID\Address as FakerAddress;

class Address extends FakerAddress
{
    /**
     * @link https://id.wikipedia.org/wiki/Daftar_jalan_di_Kota_Surakarta
     **/
    protected static $street = array(
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

    );

    protected static $streetPrefix = array(
        'Gg.', 'Jl.',
    );

    protected static $stateAbbr = array(
       'Aceh', 'Sumut', 'Sumbar', 'Jambi', 'Babel', 'Riau', 'Kepri', 'Bengkulu', 'Sumsel',
       'Lampung', 'Banten', 'DKI', 'Jabar', 'Jateng', 'Jatim', 'NTT', 'DIY',
       'Bali', 'NTB', 'Kalbar', 'Kalteng', 'Kalsel', 'Kaltim', 'Kalut', 'Sulsel',
       'Sulut', 'Gorontalo', 'Sulteng', 'Sulbar', 'Sultra', 'Maluku', 'Malut',
       'Papbar', 'Papua',
    );

    /**
     * @link: http://latitudelongitude.org/id/
     * @param mixed $min
     * @param mixed $max
     */
    public static function latitude($min = -10.1718, $max = 5.88969)
    {
        return (float) static::randomFloat(6, $min, $max);
    }

    public static function longitude($min = 95.31644, $max = 140.71813)
    {
        return (float) static::randomFloat(6, $min, $max);
    }
}
