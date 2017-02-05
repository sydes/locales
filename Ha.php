<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ha extends Locale
{
    use Rule1;

    private $isoCode = 'ha';
    private $englishName = 'Hausa';
    private $nativeName = '‫هَوُسَ‬';
    private $isRtl = true;
}
