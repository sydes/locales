<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ps extends Locale
{
    use Rule1;

    private $isoCode = 'ps';
    private $englishName = 'Pashto';
    private $nativeName = '‫پښتو‬';
    private $isRtl = false;
}
