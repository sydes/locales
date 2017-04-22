<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class De extends Locale
{
    use Rule1;

    private $isoCode = 'de';
    private $englishName = 'German';
    private $nativeName = 'Deutsch';
    private $isRtl = false;
}
