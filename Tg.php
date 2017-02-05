<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Tg extends Locale
{
    use Rule2;

    private $isoCode = 'tg';
    private $englishName = 'Tajik';
    private $nativeName = 'тоҷикӣ';
    private $isRtl = true;
}
