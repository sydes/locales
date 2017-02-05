<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule13;

class Mt extends Locale
{
    use Rule13;

    private $isoCode = 'mt';
    private $englishName = 'Maltese';
    private $nativeName = 'Malti';
    private $isRtl = false;
}
