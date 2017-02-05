<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Sv extends Locale
{
    use Rule1;

    private $isoCode = 'sv';
    private $englishName = 'Swedish';
    private $nativeName = 'Svenska';
    private $isRtl = false;
}
