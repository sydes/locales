<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class En extends Locale
{
    use Rule1;

    private $isoCode = 'en';
    private $englishName = 'English';
    private $nativeName = 'English';
    private $isRtl = false;
}
