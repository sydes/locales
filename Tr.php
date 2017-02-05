<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Tr extends Locale
{
    use Rule2;

    private $isoCode = 'tr';
    private $englishName = 'Turkish';
    private $nativeName = 'Türkçe';
    private $isRtl = false;
}
