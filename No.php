<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class No extends Locale
{
    use Rule1;

    private $isoCode = 'no';
    private $englishName = 'Norwegian';
    private $nativeName = 'Norsk';
    private $isRtl = false;
}
