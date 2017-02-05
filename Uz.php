<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Uz extends Locale
{
    use Rule2;

    private $isoCode = 'uz';
    private $englishName = 'Uzbek';
    private $nativeName = 'O\'zbek';
    private $isRtl = true;
}
