<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule5;

class Ro extends Locale
{
    use Rule5;

    protected $isoCode = 'ro';
    protected $englishName = 'Romanian';
    protected $nativeName = 'română';
    protected $isRtl = false;
}
