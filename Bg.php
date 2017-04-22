<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Bg extends Locale
{
    use Rule1;

    private $isoCode = 'bg';
    private $englishName = 'Bulgarian';
    private $nativeName = 'български език';
    private $isRtl = false;
}
