<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class An extends Locale
{
    use Rule1;

    protected $isoCode = 'an';
    protected $englishName = 'Aragonese';
    protected $nativeName = 'Aragonés';
    protected $isRtl = false;
}
