<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class He extends Locale
{
    use Rule1;

    private $isoCode = 'he';
    private $englishName = 'Hebrew';
    private $nativeName = '‫עברית‬';
    private $isRtl = true;
}
