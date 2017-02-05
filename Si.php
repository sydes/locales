<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Si extends Locale
{
    use Rule1;

    private $isoCode = 'si';
    private $englishName = 'Sinhala';
    private $nativeName = 'සිංහල';
    private $isRtl = false;
}
