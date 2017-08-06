# Manekin

[![Build Status](https://travis-ci.org/matriphe/manekin.svg?branch=master)](https://travis-ci.org/matriphe/manekin)

Manekin is [Faker](https://github.com/fzaninotto/Faker) extender specific for Indonesian data. It generate fake data specific for Indonesia only.

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

#### Matriphe\Manekin\Providers\Identity

Return NIK (Nomor Induk Kependudukan), SIM (Surat Izin Mengemudi), and Passport number.

```php
nik($gender = null)     // 3313402203841234
sim()                   // 849322123456
passport()              // A1234567
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