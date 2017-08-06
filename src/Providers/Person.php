<?php

namespace Matriphe\Manekin\Providers;

use Faker\Provider\id_ID\Person as FakerPerson;

class Person extends FakerPerson
{
    private static $suffix = [
        'S.Ked', 'S.Gz', 'S.Pt', 'S.IP', 'S.E.I', 'S.E.', 'S.Kom', 'S.H.',
        'S.T.', 'S.Pd', 'S.Psi', 'S.I.Kom', 'S.Si.', 'S.Sos', 'S.Farm',
        'M.M.', 'M.Kom.', 'M.TI.', 'M.Pd', 'M.Farm', 'M.Ak',
    ];
}
