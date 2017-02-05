<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Da extends Locale
{
    use Rule1;

    private $isoCode = 'da';
    private $englishName = 'Danish';
    private $nativeName = 'dansk';
    private $isRtl = false;
}
