<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule10;

class Sl extends Locale
{
    use Rule10;

    private $isoCode = 'sl';
    private $englishName = 'Slovenian';
    private $nativeName = 'slovenščina';
    private $isRtl = false;
}
