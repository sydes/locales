<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Si extends Locale
{
    use Rule1;

    protected $isoCode = 'si';
    protected $englishName = 'Sinhala';
    protected $nativeName = 'සිංහල';
    protected $isRtl = false;
}
