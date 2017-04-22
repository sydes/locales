<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule3;

class Lv extends Locale
{
    use Rule3;

    private $isoCode = 'lv';
    private $englishName = 'Latvian';
    private $nativeName = 'latviešu valoda';
    private $isRtl = false;
}
