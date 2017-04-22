<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Es extends Locale
{
    use Rule1;

    private $isoCode = 'es';
    private $englishName = 'Spanish';
    private $nativeName = 'español';
    private $isRtl = false;
}
