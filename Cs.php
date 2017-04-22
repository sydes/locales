<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule8;

class Cs extends Locale
{
    use Rule8;

    private $isoCode = 'cs';
    private $englishName = 'Czech';
    private $nativeName = 'čeština';
    private $isRtl = false;
}
