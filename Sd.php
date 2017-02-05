<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Sd extends Locale
{
    use Rule1;

    private $isoCode = 'sd';
    private $englishName = 'Sindhi';
    private $nativeName = 'सिन्धी‫سنڌي، سندھی‬';
    private $isRtl = false;
}
