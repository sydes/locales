<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class So extends Locale
{
    use Rule1;

    private $isoCode = 'so';
    private $englishName = 'Somali';
    private $nativeName = 'Soomaaliga';
    private $isRtl = false;
}
