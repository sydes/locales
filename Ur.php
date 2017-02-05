<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ur extends Locale
{
    use Rule1;

    private $isoCode = 'ur';
    private $englishName = 'Urdu';
    private $nativeName = '‫اردو‬';
    private $isRtl = true;
}
