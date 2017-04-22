<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Ml extends Locale
{
    use Rule1;

    private $isoCode = 'ml';
    private $englishName = 'Malayalam';
    private $nativeName = 'മലയാളം';
    private $isRtl = false;
}
