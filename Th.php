<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Th extends Locale
{
    use Rule0;

    private $isoCode = 'th';
    private $englishName = 'Thai';
    private $nativeName = 'ไทย';
    private $isRtl = false;
}
