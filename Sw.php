<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Sw extends Locale
{
    use Rule1;

    private $isoCode = 'sw';
    private $englishName = 'Swahili';
    private $nativeName = 'Kiswahili';
    private $isRtl = false;
}
