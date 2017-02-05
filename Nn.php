<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Nn extends Locale
{
    use Rule1;

    private $isoCode = 'nn';
    private $englishName = '';
    private $nativeName = 'Nynorsk';
    private $isRtl = false;
}
