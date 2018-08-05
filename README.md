# Manekin

[![Build Status](https://travis-ci.org/matriphe/manekin.svg?branch=master)](https://travis-ci.org/matriphe/manekin)

Manekin is [Faker](https://github.com/fzaninotto/Faker) extender specific for Indonesian data. It generate fake data specific for Indonesia only.

## Installation

Using [composer](https://getcomposer.org/), run this command.

```console
composer require matriphe/manekin
```

### Laravel 5 Integration

Open `config/app.php` and add this line in `providers` section.

```php
Matriphe\Manekin\ManekinServiceProvider::class,
```

Now your model factory should load **Manekin**.

#### Laravel 5.5 Package Auto Discovery ####

This package supports [Laravel 5.5 package auto discovery](https://laravel.com/docs/5.5/packages#package-discovery) feature. You don't need to manually add in the `config/app.php`.

### Lumen Integration

Open `bootstrap/app.php` and add this line in `Register Service Providers` section.

```php
$app->register(Matriphe\Manekin\ManekinServiceProvider::class);
```

## Usage

Manekin's methods are same with Faker's methods. It just extending the methods.

## Specific Formatters

#### Matriphe\Manekin\Providers\Address

Return coordinates in Indonesia territory. 

```php
latitude($min = -10.1718, $max = 5.88969)     // -6.21462
longitude($min = 95.31644, $max = 140.71813)  // 106.84513
localCoordinates()                            // array('latitude' => -6.21462, 'longitude' => 106.84513)
```

#### Matriphe\Manekin\Providers\DateTime

Return birth date.

```php
birthDate($minAge = 13, $maxAge = 100, $timezone = null)    // DateTime('1984-03-22 20:38:00', 'Asia/Jakarta')
```

#### Matriphe\Manekin\Providers\Device

Return IMEI, IMSI, ICCID, and Android Device ID.

```php
imei()                  // 8658507594263070
imsi()                  // 510079932515821
iccid()                 // 8962097349284530254C
androidDeviceId()       // 3A73C5C7FB3629D1
```

#### Matriphe\Manekin\Providers\Identity

Return NIK (Nomor Induk Kependudukan), SIM (Surat Izin Mengemudi), and Passport number.

```php
nik($gender = null)     // 3313402203841234
sim()                   // 849322123456
passport()              // A1234567
```

#### Matriphe\Manekin\Providers\Miscellaneous

Return random alpha numeric.

```php
randomAlphaNumeric($length = null)     // QS9F8JAR25SF
```

#### Matriphe\Manekin\Providers\PhoneNumber

Return mobile phone numbers that recognized by Indonesian providers (Telkomsel, Indosat Ooredoo, XL Axiata, Axis, Tri, and Smartfren).

```php
mobilePhoneNumber()         // 0896 0411 6056
e164MobilePhoneNumber()     // +6289604116056
```

#### Matriphe\Manekin\Providers\Vehicle

Return police number information.

```php
policeNumber()         // AD 6742 XY
specialPoliceNumber()  // RI 1
```

## License

Manekin is released under the [MIT Licence](LICENSE.md).
