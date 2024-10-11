<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getCreateNotificationTitle(): ?string 
    {
        return 'Customer successfully added..';
    }

    protected function getCreateNotification(): ?Notification 
    {
        return Notification::make()
         ->success()
         ->title('Customer added..')
         ->body(' New Customer successfully added..');
    }
}
