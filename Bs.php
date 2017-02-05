<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule7;

class Bs extends Locale
{
    use Rule7;

    private $isoCode = 'bs';
    private $englishName = 'Bosnian';
    private $nativeName = 'bosanski jezik';
    private $isRtl = false;
}
