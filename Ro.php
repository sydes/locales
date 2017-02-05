<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule5;

class Ro extends Locale
{
    use Rule5;

    private $isoCode = 'ro';
    private $englishName = 'Romanian';
    private $nativeName = 'română';
    private $isRtl = false;
}
