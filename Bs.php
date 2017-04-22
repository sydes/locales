<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule7;

class Bs extends Locale
{
    use Rule7;

    private $isoCode = 'bs';
    private $englishName = 'Bosnian';
    private $nativeName = 'bosanski jezik';
    private $isRtl = false;
}
