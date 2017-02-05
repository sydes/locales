<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Gu extends Locale
{
    use Rule1;

    private $isoCode = 'gu';
    private $englishName = 'Gujarati';
    private $nativeName = 'ગુજરાતી';
    private $isRtl = false;
}
