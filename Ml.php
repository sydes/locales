<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ml extends Locale
{
    use Rule1;

    private $isoCode = 'ml';
    private $englishName = 'Malayalam';
    private $nativeName = 'മലയാളം';
    private $isRtl = false;
}
