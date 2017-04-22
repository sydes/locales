<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class El extends Locale
{
    use Rule1;

    private $isoCode = 'el';
    private $englishName = 'Greek';
    private $nativeName = 'Ελληνικά';
    private $isRtl = false;
}
