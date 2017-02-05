<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ne extends Locale
{
    use Rule1;

    private $isoCode = 'ne';
    private $englishName = 'Nepali';
    private $nativeName = 'नेपाली';
    private $isRtl = false;
}
