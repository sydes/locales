<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Ko extends Locale
{
    use Rule0;

    private $isoCode = 'ko';
    private $englishName = 'Korean';
    private $nativeName = '한국어';
    private $isRtl = false;
}
