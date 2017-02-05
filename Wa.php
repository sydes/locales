<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Wa extends Locale
{
    use Rule2;

    private $isoCode = 'wa';
    private $englishName = 'Walloon';
    private $nativeName = 'Walon';
    private $isRtl = false;
}
