<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Fi extends Locale
{
    use Rule1;

    protected $isoCode = 'fi';
    protected $englishName = 'Finnish';
    protected $nativeName = 'Suomen kieli';
    protected $isRtl = false;
}
