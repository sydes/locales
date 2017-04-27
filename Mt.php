<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule13;

class Mt extends Locale
{
    use Rule13;

    protected $isoCode = 'mt';
    protected $englishName = 'Maltese';
    protected $nativeName = 'Malti';
    protected $isRtl = false;
}
