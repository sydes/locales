<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule2;

class Mg extends Locale
{
    use Rule2;

    private $isoCode = 'mg';
    private $englishName = 'Malagasy';
    private $nativeName = 'Malagasy fiteny';
    private $isRtl = false;
}