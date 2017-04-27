<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Mr extends Locale
{
    use Rule1;

    protected $isoCode = 'mr';
    protected $englishName = 'Marathi';
    protected $nativeName = 'मराठी';
    protected $isRtl = false;
}
