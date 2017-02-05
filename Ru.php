<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule7;

class Ru extends Locale
{
    use Rule7;

    private $isoCode = 'ru';
    private $englishName = 'Russian';
    private $nativeName = 'Русский';
    private $isRtl = false;
}
