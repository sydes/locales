<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Hi extends Locale
{
    use Rule1;

    private $isoCode = 'hi';
    private $englishName = 'Hindi';
    private $nativeName = 'हिन्दी';
    private $isRtl = false;
}
