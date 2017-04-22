<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule4;

class Gd extends Locale
{
    use Rule4;

    private $isoCode = 'gd';
    private $englishName = 'Gaelic';
    private $nativeName = 'Gàidhlig';
    private $isRtl = false;
}
