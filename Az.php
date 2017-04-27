<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Az extends Locale
{
    use Rule1;

    protected $isoCode = 'az';
    protected $englishName = 'Azerbaijani';
    protected $nativeName = 'azərbaycan dili';
    protected $isRtl = false;
}
