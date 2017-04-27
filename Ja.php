<?php

namespace Locales;

use Sydes\L10n\Locale;
use Sydes\L10n\Plural\Rule0;

class Ja extends Locale
{
    use Rule0;

    protected $isoCode = 'ja';
    protected $englishName = 'Japanese';
    protected $nativeName = '日本語';
    protected $isRtl = false;
}
