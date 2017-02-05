<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Oc extends Locale
{
    use Rule2;

    private $isoCode = 'oc';
    private $englishName = 'Occitan';
    private $nativeName = 'Occitan';
    private $isRtl = false;
}
