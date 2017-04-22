<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Yo extends Locale
{
    use Rule1;

    private $isoCode = 'yo';
    private $englishName = 'Yoruba';
    private $nativeName = 'Yorùbá';
    private $isRtl = false;
}
