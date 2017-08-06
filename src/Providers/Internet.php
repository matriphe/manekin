<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\id_ID\Internet as FakerInternet;

class Internet extends FakerInternet
{
    /**
     * @var array some email domains
     */
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'gmail.co.id', 'yahoo.co.id', 'live.com',
        'outlook.com', 'hotmail.com',
    ];

    /**
     * General tld and local tld
     *
     * @link http://idwebhost.com/
     * @link http://domain.id/
     */
    protected static $tld = [
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id', 'id',
    ];
}
