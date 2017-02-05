<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class No extends Locale
{
    use Rule1;

    private $isoCode = 'no';
    private $englishName = 'Norwegian';
    private $nativeName = 'Norsk';
    private $isRtl = false;
}
