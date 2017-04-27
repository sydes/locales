<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule7;

class Bs extends Locale
{
    use Rule7;

    protected $isoCode = 'bs';
    protected $englishName = 'Bosnian';
    protected $nativeName = 'bosanski jezik';
    protected $isRtl = false;
}
