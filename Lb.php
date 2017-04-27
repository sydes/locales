<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Lb extends Locale
{
    use Rule1;

    protected $isoCode = 'lb';
    protected $englishName = 'Luxembourgish';
    protected $nativeName = 'Lëtzebuergesch';
    protected $isRtl = false;
}
