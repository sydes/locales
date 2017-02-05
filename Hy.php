<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Hy extends Locale
{
    use Rule1;

    private $isoCode = 'hy';
    private $englishName = 'Armenian';
    private $nativeName = 'Հայերեն';
    private $isRtl = false;
}
