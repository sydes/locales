<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Af extends Locale
{
    use Rule1;

    protected $isoCode = 'af';
    protected $englishName = 'Afrikaans';
    protected $nativeName = 'Afrikaans';
    protected $isRtl = false;
}
