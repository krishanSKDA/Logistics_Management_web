<?php

namespace App\Filament\Resources\OrdersResource\Pages;

use App\Filament\Resources\OrdersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrders extends CreateRecord
{
    protected static string $resource = OrdersResource::class;

    protected function getCreateNotificationTitle(): ?string 
    {
        return 'Order Successfully !!';
    }

    protected function getCreateNotification(): ?Notification 
    {
        return Notification::make()
         ->success()
         ->title('Order added..')
         ->body(' New Order successfully added..');
    }
}
