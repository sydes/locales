<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule12;

class Ar extends Locale
{
    use Rule12;

    private $isoCode = 'ar';
    private $englishName = 'Arabic';
    private $nativeName = '‫العربية‬';
    private $isRtl = true;
}
