<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule7;

class Be extends Locale
{
    use Rule7;

    private $isoCode = 'be';
    private $englishName = 'Belarusian';
    private $nativeName = 'Беларуская';
    private $isRtl = false;
}
