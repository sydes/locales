<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule9;

class Pl extends Locale
{
    use Rule9;

    private $isoCode = 'pl';
    private $englishName = 'Polish';
    private $nativeName = 'Polski';
    private $isRtl = false;
}
