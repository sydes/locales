<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class St extends Locale
{
    use Rule1;

    private $isoCode = 'st';
    private $englishName = '';
    private $nativeName = 'seSotho';
    private $isRtl = false;
}
