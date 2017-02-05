<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Te extends Locale
{
    use Rule1;

    private $isoCode = 'te';
    private $englishName = 'Telugu';
    private $nativeName = 'తెలుగు';
    private $isRtl = false;
}
