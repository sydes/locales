<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Rm extends Locale
{
    use Rule1;

    private $isoCode = 'rm';
    private $englishName = '';
    private $nativeName = 'rumantsch grischun';
    private $isRtl = false;
}
