<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule11;

class Ga extends Locale
{
    use Rule11;

    private $isoCode = 'ga';
    private $englishName = 'Irish';
    private $nativeName = 'Gaeilge';
    private $isRtl = false;
}
