<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Kl extends Locale
{
    use Rule1;

    private $isoCode = 'kl';
    private $englishName = 'Kalaallisut';
    private $nativeName = 'kalaallisut';
    private $isRtl = false;
}
