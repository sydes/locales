<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Ku extends Locale
{
    use Rule1;

    private $isoCode = 'ku';
    private $englishName = 'Kurdish';
    private $nativeName = 'Kurdî‫كوردی‬';
    private $isRtl = false;
}
