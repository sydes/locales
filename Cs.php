<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule8;

class Cs extends Locale
{
    use Rule8;

    private $isoCode = 'cs';
    private $englishName = 'Czech';
    private $nativeName = 'čeština';
    private $isRtl = false;
}
