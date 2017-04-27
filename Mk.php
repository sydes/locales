<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule14;

class Mk extends Locale
{
    use Rule14;

    protected $isoCode = 'mk';
    protected $englishName = 'Macedonian';
    protected $nativeName = 'македонски јазик';
    protected $isRtl = false;
}
