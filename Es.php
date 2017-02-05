<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Es extends Locale
{
    use Rule1;

    private $isoCode = 'es';
    private $englishName = 'Spanish';
    private $nativeName = 'español';
    private $isRtl = false;
}
