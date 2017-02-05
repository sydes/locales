<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Ti extends Locale
{
    use Rule2;

    private $isoCode = 'ti';
    private $englishName = 'Tigrinya';
    private $nativeName = 'ትግርኛ';
    private $isRtl = false;
}
