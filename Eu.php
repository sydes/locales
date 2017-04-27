<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule1;

class Eu extends Locale
{
    use Rule1;

    protected $isoCode = 'eu';
    protected $englishName = 'Basque';
    protected $nativeName = 'euskara';
    protected $isRtl = false;
}
