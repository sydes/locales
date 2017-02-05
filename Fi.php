<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Fi extends Locale
{
    use Rule1;

    private $isoCode = 'fi';
    private $englishName = 'Finnish';
    private $nativeName = 'Suomen kieli';
    private $isRtl = false;
}
