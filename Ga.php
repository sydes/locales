<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule11;

class Ga extends Locale
{
    use Rule11;

    protected $isoCode = 'ga';
    protected $englishName = 'Irish';
    protected $nativeName = 'Gaeilge';
    protected $isRtl = false;
}
