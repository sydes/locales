<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Ca extends Locale
{
    use Rule1;

    private $isoCode = 'ca';
    private $englishName = 'Catalan';
    private $nativeName = 'Català';
    private $isRtl = false;
}
