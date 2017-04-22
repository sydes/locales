<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Da extends Locale
{
    use Rule1;

    private $isoCode = 'da';
    private $englishName = 'Danish';
    private $nativeName = 'dansk';
    private $isRtl = false;
}
