<?php

namespace App\Enums;

enum UserStatusEnum:int
{
    case ADMIN = 1;
    case NONADMIN = 0;
}
