<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class My extends Locale
{
    use Rule0;

    private $isoCode = 'my';
    private $englishName = 'Burmese';
    private $nativeName = 'မ္ရန္‌မာစကား';
    private $isRtl = false;
}
