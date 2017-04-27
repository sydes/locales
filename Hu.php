<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Hu extends Locale
{
    use Rule1;

    protected $isoCode = 'hu';
    protected $englishName = 'Hungarian';
    protected $nativeName = 'Magyar';
    protected $isRtl = false;
}
