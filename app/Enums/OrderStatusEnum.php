<?php

namespace App\Enums;
use BenSampo\Enum\Enum;


enum OrderStatusEnum: string
{
    case PENDING = 'Pending';
    case PROCESSING = 'Processing';
    case COMPLETED = 'Completed';
    case CANCELED = 'Canceled';

    public function label(): string
    {
        return match($this) {
            self::PENDING => 'Pending',
            self::PROCESSING => 'Processing',
            self::COMPLETED => 'Completed',
            self::CANCELED => 'Canceled',
        };
    }
}
