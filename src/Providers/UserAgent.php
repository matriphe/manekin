<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\UserAgent as FakerUserAgent;

class UserAgent extends FakerUserAgent
{
    /**
     * Add as many languages as you like.
     */
    protected static $lang = ['en-US', 'id-ID', 'en-ID'];
}
