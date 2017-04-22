<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Fa extends Locale
{
    use Rule1;

    private $isoCode = 'fa';
    private $englishName = 'Persian';
    private $nativeName = '‫فارسی‬';
    private $isRtl = true;
}
