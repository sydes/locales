<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule0;

class Vi extends Locale
{
    use Rule0;

    protected $isoCode = 'vi';
    protected $englishName = 'Vietnamese';
    protected $nativeName = 'Tiếng Việt';
    protected $isRtl = false;
}
