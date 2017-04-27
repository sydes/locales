<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Oc extends Locale
{
    use Rule2;

    protected $isoCode = 'oc';
    protected $englishName = 'Occitan';
    protected $nativeName = 'Occitan';
    protected $isRtl = false;
}
