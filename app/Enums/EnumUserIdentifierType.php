<?php

namespace Modules\User\Enums;

use Modules\General\Contracts\Enum\EnumMethods;

enum EnumUserIdentifierType: string
{
    use EnumMethods;

    case EMAIL = 'email';
    case MOBILE = 'mobile';
}

