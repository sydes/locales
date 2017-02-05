<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Eo extends Locale
{
    use Rule1;

    private $isoCode = 'eo';
    private $englishName = 'Esperanto';
    private $nativeName = 'Esperanto';
    private $isRtl = false;
}
