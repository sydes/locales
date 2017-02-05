<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Zh extends Locale
{
    use Rule0;

    private $isoCode = 'zh';
    private $englishName = 'Chinese';
    private $nativeName = '中文、汉语、漢語';
    private $isRtl = false;
}
