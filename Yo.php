<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Yo extends Locale
{
    use Rule1;

    private $isoCode = 'yo';
    private $englishName = 'Yoruba';
    private $nativeName = 'Yorùbá';
    private $isRtl = false;
}
