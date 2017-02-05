<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Mr extends Locale
{
    use Rule1;

    private $isoCode = 'mr';
    private $englishName = 'Marathi';
    private $nativeName = 'मराठी';
    private $isRtl = false;
}
