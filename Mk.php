<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule14;

class Mk extends Locale
{
    use Rule14;

    private $isoCode = 'mk';
    private $englishName = 'Macedonian';
    private $nativeName = 'македонски јазик';
    private $isRtl = false;
}
