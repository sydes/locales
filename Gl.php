<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Gl extends Locale
{
    use Rule1;

    private $isoCode = 'gl';
    private $englishName = 'Galician';
    private $nativeName = 'Galego';
    private $isRtl = false;
}
