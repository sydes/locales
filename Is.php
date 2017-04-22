<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule15;

class Is extends Locale
{
    use Rule15;

    private $isoCode = 'is';
    private $englishName = 'Icelandic';
    private $nativeName = 'Íslenska';
    private $isRtl = false;
}
