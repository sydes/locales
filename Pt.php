<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Pt extends Locale
{
    use Rule1;

    private $isoCode = 'pt';
    private $englishName = 'Portuguese';
    private $nativeName = 'Português';
    private $isRtl = false;
}
