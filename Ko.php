<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule0;

class Ko extends Locale
{
    use Rule0;

    private $isoCode = 'ko';
    private $englishName = 'Korean';
    private $nativeName = '한국어';
    private $isRtl = false;
}
