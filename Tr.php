<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Tr extends Locale
{
    use Rule2;

    protected $isoCode = 'tr';
    protected $englishName = 'Turkish';
    protected $nativeName = 'Türkçe';
    protected $isRtl = false;
}
