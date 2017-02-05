<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class De extends Locale
{
    use Rule1;

    private $isoCode = 'de';
    private $englishName = 'German';
    private $nativeName = 'Deutsch';
    private $isRtl = false;
}
