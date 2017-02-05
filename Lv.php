<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule3;

class Lv extends Locale
{
    use Rule3;

    private $isoCode = 'lv';
    private $englishName = 'Latvian';
    private $nativeName = 'latviešu valoda';
    private $isRtl = false;
}
