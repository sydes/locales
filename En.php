<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class En extends Locale
{
    use Rule1;

    private $isoCode = 'en';
    private $englishName = 'English';
    private $nativeName = 'English';
    private $isRtl = false;
}
