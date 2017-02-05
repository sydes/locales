<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Nb extends Locale
{
    use Rule1;

    private $isoCode = 'nb';
    private $englishName = '';
    private $nativeName = 'Norsk';
    private $isRtl = false;
}
