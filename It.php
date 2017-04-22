<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class It extends Locale
{
    use Rule1;

    private $isoCode = 'it';
    private $englishName = 'Italian';
    private $nativeName = 'Italiano';
    private $isRtl = false;
}
