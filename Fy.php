<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Fy extends Locale
{
    use Rule1;

    private $isoCode = 'fy';
    private $englishName = '';
    private $nativeName = 'Frysk';
    private $isRtl = false;
}
