<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Sv extends Locale
{
    use Rule1;

    private $isoCode = 'sv';
    private $englishName = 'Swedish';
    private $nativeName = 'Svenska';
    private $isRtl = false;
}
