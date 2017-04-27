<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Ca extends Locale
{
    use Rule1;

    protected $isoCode = 'ca';
    protected $englishName = 'Catalan';
    protected $nativeName = 'Català';
    protected $isRtl = false;
}
