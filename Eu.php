<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Eu extends Locale
{
    use Rule1;

    private $isoCode = 'eu';
    private $englishName = 'Basque';
    private $nativeName = 'euskara';
    private $isRtl = false;
}
