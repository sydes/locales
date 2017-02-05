<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Se extends Locale
{
    use Rule1;

    private $isoCode = 'se';
    private $englishName = '';
    private $nativeName = 'Davvisámegiella';
    private $isRtl = false;
}
