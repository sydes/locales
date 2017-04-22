<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Tr extends Locale
{
    use Rule2;

    private $isoCode = 'tr';
    private $englishName = 'Turkish';
    private $nativeName = 'Türkçe';
    private $isRtl = false;
}
