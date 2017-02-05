<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Rw extends Locale
{
    use Rule1;

    private $isoCode = 'rw';
    private $englishName = 'Kinyarwanda';
    private $nativeName = 'Kinyarwanda';
    private $isRtl = false;
}
