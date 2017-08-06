<?php

namespace Matriphe\Manekin;

use Faker\Generator;
use InvalidArgumentException;

class Factory
{
    protected static $defaultProviders = [
        'Address', 'Barcode', 'Biased', 'Color', 'Company', 'DateTime', 'File',
        'HtmlLorem', 'Identity', 'Image', 'Internet', 'Lorem', 'Miscellaneous', 
        'Payment', 'Person', 'PhoneNumber', 'Text', 'UserAgent', 'Uuid', 'Vehicle',
    ];

    /**
     * Create a new generator
     *
     * @return Generator
     */
    public static function create()
    {
        $generator = new Generator();

        foreach (static::$defaultProviders as $provider) {
            $providerClassName = self::getProviderClassname($provider);
            $generator->addProvider(new $providerClassName($generator));
        }

        return $generator;
    }

    /**
     * @param  string $provider
     * @return string
     */
    protected static function getProviderClassname($provider)
    {
        if ($providerClass = self::findProviderClassname($provider)) {
            return $providerClass;
        }

        throw new InvalidArgumentException(sprintf('Unable to find provider "%s"', $provider));
    }

    /**
     * @param  string $provider
     * @return string
     */
    protected static function findProviderClassname($provider)
    {
        $providerClass = 'Matriphe\\Manekin\\'.sprintf('Providers\%s', $provider);

        if (class_exists($providerClass, true)) {
            return $providerClass;
        }
    }
}
