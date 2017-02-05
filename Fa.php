<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Fa extends Locale
{
    use Rule1;

    private $isoCode = 'fa';
    private $englishName = 'Persian';
    private $nativeName = '‫فارسی‬';
    private $isRtl = true;
}
