<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule14;

class Mk extends Locale
{
    use Rule14;

    private $isoCode = 'mk';
    private $englishName = 'Macedonian';
    private $nativeName = 'македонски јазик';
    private $isRtl = false;
}
