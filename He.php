<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class He extends Locale
{
    use Rule1;

    private $isoCode = 'he';
    private $englishName = 'Hebrew';
    private $nativeName = '‫עברית‬';
    private $isRtl = true;
}
