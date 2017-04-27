<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Am extends Locale
{
    use Rule2;

    protected $isoCode = 'am';
    protected $englishName = 'Amharic';
    protected $nativeName = 'አማርኛ';
    protected $isRtl = false;
}
