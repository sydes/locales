<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Ur extends Locale
{
    use Rule1;

    protected $isoCode = 'ur';
    protected $englishName = 'Urdu';
    protected $nativeName = '‫اردو‬';
    protected $isRtl = true;
}
