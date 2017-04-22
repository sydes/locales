<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule7;

class Sr extends Locale
{
    use Rule7;

    private $isoCode = 'sr';
    private $englishName = 'Serbian';
    private $nativeName = 'српски језик';
    private $isRtl = false;
}
