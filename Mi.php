<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Mi extends Locale
{
    use Rule2;

    private $isoCode = 'mi';
    private $englishName = '';
    private $nativeName = 'te reo Māori';
    private $isRtl = false;
}
