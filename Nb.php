<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Nb extends Locale
{
    use Rule1;

    private $isoCode = 'nb';
    private $englishName = '';
    private $nativeName = 'Norsk';
    private $isRtl = false;
}
