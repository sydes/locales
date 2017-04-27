<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Yo extends Locale
{
    use Rule1;

    protected $isoCode = 'yo';
    protected $englishName = 'Yoruba';
    protected $nativeName = 'Yorùbá';
    protected $isRtl = false;
}
