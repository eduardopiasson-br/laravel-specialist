<?php

namespace App\Enums;

enum SignatureStatus: int
{
    case ACTIVED = 1;
    case DEACTIVATED = 2;
    case SUSPENDED = 3;
    case CANCELED = 4;
}