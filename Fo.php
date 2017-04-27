<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Fo extends Locale
{
    use Rule1;

    protected $isoCode = 'fo';
    protected $englishName = 'Faroese';
    protected $nativeName = 'Føroyskt';
    protected $isRtl = false;
}
