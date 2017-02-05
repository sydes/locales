<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class Lb extends Locale
{
    use Rule1;

    private $isoCode = 'lb';
    private $englishName = 'Luxembourgish';
    private $nativeName = 'Lëtzebuergesch';
    private $isRtl = false;
}
