<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Tk extends Locale
{
    use Rule1;

    private $isoCode = 'tk';
    private $englishName = 'Turkmen';
    private $nativeName = 'Türkmen';
    private $isRtl = false;
}
