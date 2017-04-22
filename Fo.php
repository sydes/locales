<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Fo extends Locale
{
    use Rule1;

    private $isoCode = 'fo';
    private $englishName = 'Faroese';
    private $nativeName = 'Føroyskt';
    private $isRtl = false;
}
