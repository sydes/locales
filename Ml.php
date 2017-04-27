<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Ml extends Locale
{
    use Rule1;

    protected $isoCode = 'ml';
    protected $englishName = 'Malayalam';
    protected $nativeName = 'മലയാളം';
    protected $isRtl = false;
}
