<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Bn extends Locale
{
    use Rule1;

    private $isoCode = 'bn';
    private $englishName = 'Bengali';
    private $nativeName = 'বাংলা';
    private $isRtl = false;
}
