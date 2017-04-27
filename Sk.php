<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule8;

class Sk extends Locale
{
    use Rule8;

    protected $isoCode = 'sk';
    protected $englishName = 'Slovak';
    protected $nativeName = 'slovenčina';
    protected $isRtl = false;
}
