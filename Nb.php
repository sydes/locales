<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Nb extends Locale
{
    use Rule1;

    protected $isoCode = 'nb';
    protected $englishName = '';
    protected $nativeName = 'Norsk';
    protected $isRtl = false;
}
