<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Ta extends Locale
{
    use Rule1;

    protected $isoCode = 'ta';
    protected $englishName = 'Tamil';
    protected $nativeName = 'தமிழ்';
    protected $isRtl = false;
}
