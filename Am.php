<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Am extends Locale
{
    use Rule2;

    private $isoCode = 'am';
    private $englishName = 'Amharic';
    private $nativeName = 'አማርኛ';
    private $isRtl = false;
}
