<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Lb extends Locale
{
    use Rule1;

    private $isoCode = 'lb';
    private $englishName = 'Luxembourgish';
    private $nativeName = 'Lëtzebuergesch';
    private $isRtl = false;
}
