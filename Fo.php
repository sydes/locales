<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Fo extends Locale
{
    use Rule1;

    private $isoCode = 'fo';
    private $englishName = 'Faroese';
    private $nativeName = 'Føroyskt';
    private $isRtl = false;
}
