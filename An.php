<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class An extends Locale
{
    use Rule1;

    private $isoCode = 'an';
    private $englishName = 'Aragonese';
    private $nativeName = 'Aragonés';
    private $isRtl = false;
}