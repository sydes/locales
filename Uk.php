<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule7;

class Uk extends Locale
{
    use Rule7;

    private $isoCode = 'uk';
    private $englishName = 'Ukrainian';
    private $nativeName = 'українська мова';
    private $isRtl = false;
}