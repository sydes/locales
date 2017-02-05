<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Ln extends Locale
{
    use Rule2;

    private $isoCode = 'ln';
    private $englishName = 'Lingala';
    private $nativeName = 'Lingála';
    private $isRtl = false;
}
