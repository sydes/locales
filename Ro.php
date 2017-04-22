<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule5;

class Ro extends Locale
{
    use Rule5;

    private $isoCode = 'ro';
    private $englishName = 'Romanian';
    private $nativeName = 'română';
    private $isRtl = false;
}
