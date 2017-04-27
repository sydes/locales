<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Sq extends Locale
{
    use Rule1;

    protected $isoCode = 'sq';
    protected $englishName = 'Albanian';
    protected $nativeName = 'Shqip';
    protected $isRtl = false;
}
