<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Or extends Locale
{
    use Rule1;

    private $isoCode = 'or';
    private $englishName = 'Oriya';
    private $nativeName = 'ଓଡ଼ିଆ';
    private $isRtl = false;
}
