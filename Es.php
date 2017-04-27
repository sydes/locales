<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Es extends Locale
{
    use Rule1;

    protected $isoCode = 'es';
    protected $englishName = 'Spanish';
    protected $nativeName = 'español';
    protected $isRtl = false;
}
