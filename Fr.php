<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Fr extends Locale
{
    use Rule2;

    private $isoCode = 'fr';
    private $englishName = 'French';
    private $nativeName = 'français';
    private $isRtl = false;
}
