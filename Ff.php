<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ff extends Locale
{
    use Rule1;

    private $isoCode = 'ff';
    private $englishName = 'Fulah';
    private $nativeName = 'Fulfulde';
    private $isRtl = false;
}
