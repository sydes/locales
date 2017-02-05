<?php

namespace Locales;

use App\L10n\Locale;
use App\L10n\Plural\Rule1;

class As extends Locale
{
    use Rule1;

    private $isoCode = 'as';
    private $englishName = 'Assamese';
    private $nativeName = 'অসমীয়া';
    private $isRtl = false;
}
