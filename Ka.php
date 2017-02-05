<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Ka extends Locale
{
    use Rule0;

    private $isoCode = 'ka';
    private $englishName = 'Georgian';
    private $nativeName = 'ქართული';
    private $isRtl = false;
}
