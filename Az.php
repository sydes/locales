<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Az extends Locale
{
    use Rule1;

    private $isoCode = 'az';
    private $englishName = 'Azerbaijani';
    private $nativeName = 'azərbaycan dili';
    private $isRtl = false;
}
