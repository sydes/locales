<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Kn extends Locale
{
    use Rule1;

    private $isoCode = 'kn';
    private $englishName = 'Kannada';
    private $nativeName = 'ಕನ್ನಡ';
    private $isRtl = false;
}
