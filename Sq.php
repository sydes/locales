<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Sq extends Locale
{
    use Rule1;

    private $isoCode = 'sq';
    private $englishName = 'Albanian';
    private $nativeName = 'Shqip';
    private $isRtl = false;
}
