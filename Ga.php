<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule11;

class Ga extends Locale
{
    use Rule11;

    private $isoCode = 'ga';
    private $englishName = 'Irish';
    private $nativeName = 'Gaeilge';
    private $isRtl = false;
}
