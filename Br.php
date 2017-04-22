<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule2;

class Br extends Locale
{
    use Rule2;

    private $isoCode = 'br';
    private $englishName = 'Breton';
    private $nativeName = 'brezhoneg';
    private $isRtl = false;
}
