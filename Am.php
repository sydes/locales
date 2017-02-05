<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Am extends Locale
{
    use Rule2;

    private $isoCode = 'am';
    private $englishName = 'Amharic';
    private $nativeName = 'አማርኛ';
    private $isRtl = false;
}
