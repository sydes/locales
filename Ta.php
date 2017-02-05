<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ta extends Locale
{
    use Rule1;

    private $isoCode = 'ta';
    private $englishName = 'Tamil';
    private $nativeName = 'தமிழ்';
    private $isRtl = false;
}
