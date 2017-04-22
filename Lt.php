<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule6;

class Lt extends Locale
{
    use Rule6;

    private $isoCode = 'lt';
    private $englishName = 'Lithuanian';
    private $nativeName = 'lietuvių kalba';
    private $isRtl = false;
}
