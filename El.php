<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class El extends Locale
{
    use Rule1;

    private $isoCode = 'el';
    private $englishName = 'Greek';
    private $nativeName = 'Ελληνικά';
    private $isRtl = false;
}
