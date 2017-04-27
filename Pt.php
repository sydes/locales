<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Pt extends Locale
{
    use Rule1;

    protected $isoCode = 'pt';
    protected $englishName = 'Portuguese';
    protected $nativeName = 'Português';
    protected $isRtl = false;
}
