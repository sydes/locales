<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule8;

class Sk extends Locale
{
    use Rule8;

    private $isoCode = 'sk';
    private $englishName = 'Slovak';
    private $nativeName = 'slovenčina';
    private $isRtl = false;
}
