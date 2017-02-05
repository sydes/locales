<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Mn extends Locale
{
    use Rule1;

    private $isoCode = 'mn';
    private $englishName = 'Mongolian';
    private $nativeName = 'Монгол';
    private $isRtl = false;
}
