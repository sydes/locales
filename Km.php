<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Km extends Locale
{
    use Rule0;

    private $isoCode = 'km';
    private $englishName = 'Khmer';
    private $nativeName = 'ភាសាខ្មែរ';
    private $isRtl = false;
}
