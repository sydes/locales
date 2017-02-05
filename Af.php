<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Af extends Locale
{
    use Rule1;

    private $isoCode = 'af';
    private $englishName = 'Afrikaans';
    private $nativeName = 'Afrikaans';
    private $isRtl = false;
}
