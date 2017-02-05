<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Hi extends Locale
{
    use Rule1;

    private $isoCode = 'hi';
    private $englishName = 'Hindi';
    private $nativeName = 'हिन्दी';
    private $isRtl = false;
}
