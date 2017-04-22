<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule0;

class Vi extends Locale
{
    use Rule0;

    private $isoCode = 'vi';
    private $englishName = 'Vietnamese';
    private $nativeName = 'Tiếng Việt';
    private $isRtl = false;
}
