<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Nl extends Locale
{
    use Rule1;

    private $isoCode = 'nl';
    private $englishName = 'Dutch';
    private $nativeName = 'Nederlands';
    private $isRtl = false;
}
