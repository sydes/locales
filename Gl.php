<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Gl extends Locale
{
    use Rule1;

    protected $isoCode = 'gl';
    protected $englishName = 'Galician';
    protected $nativeName = 'Galego';
    protected $isRtl = false;
}
