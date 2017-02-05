<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule7;

class Hr extends Locale
{
    use Rule7;

    private $isoCode = 'hr';
    private $englishName = 'Croatian';
    private $nativeName = 'Hrvatski';
    private $isRtl = false;
}
