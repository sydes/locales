<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule12;

class Ar extends Locale
{
    use Rule12;

    protected $isoCode = 'ar';
    protected $englishName = 'Arabic';
    protected $nativeName = '‫العربية‬';
    protected $isRtl = true;
}
