<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Id extends Locale
{
    use Rule0;

    private $isoCode = 'id';
    private $englishName = 'Indonesian';
    private $nativeName = 'Bahasa Indonesia';
    private $isRtl = false;
}
