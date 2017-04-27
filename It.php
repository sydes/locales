<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class It extends Locale
{
    use Rule1;

    protected $isoCode = 'it';
    protected $englishName = 'Italian';
    protected $nativeName = 'Italiano';
    protected $isRtl = false;
}
