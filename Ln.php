<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Ln extends Locale
{
    use Rule2;

    protected $isoCode = 'ln';
    protected $englishName = 'Lingala';
    protected $nativeName = 'Lingála';
    protected $isRtl = false;
}
