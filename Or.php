<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Or extends Locale
{
    use Rule1;

    protected $isoCode = 'or';
    protected $englishName = 'Oriya';
    protected $nativeName = 'ଓଡ଼ିଆ';
    protected $isRtl = false;
}
