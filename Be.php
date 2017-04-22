<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule7;

class Be extends Locale
{
    use Rule7;

    private $isoCode = 'be';
    private $englishName = 'Belarusian';
    private $nativeName = 'Беларуская';
    private $isRtl = false;
}
