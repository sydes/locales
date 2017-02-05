<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Pa extends Locale
{
    use Rule1;

    private $isoCode = 'pa';
    private $englishName = 'Panjabi';
    private $nativeName = 'ਪੰਜਾਬੀ‫پنجابی‬';
    private $isRtl = true;
}
