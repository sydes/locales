<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule0;

class Ja extends Locale
{
    use Rule0;

    private $isoCode = 'ja';
    private $englishName = 'Japanese';
    private $nativeName = '日本語';
    private $isRtl = false;
}
