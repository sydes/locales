<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Et extends Locale
{
    use Rule1;

    private $isoCode = 'et';
    private $englishName = 'Estonian';
    private $nativeName = 'Eesti keel';
    private $isRtl = false;
}
