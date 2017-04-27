<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule0;

class Th extends Locale
{
    use Rule0;

    protected $isoCode = 'th';
    protected $englishName = 'Thai';
    protected $nativeName = 'ไทย';
    protected $isRtl = false;
}
