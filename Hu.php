<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Hu extends Locale
{
    use Rule1;

    private $isoCode = 'hu';
    private $englishName = 'Hungarian';
    private $nativeName = 'Magyar';
    private $isRtl = false;
}
