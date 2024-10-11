<?php

namespace App\Filament\Resources\VehicleResource\Pages;

use App\Filament\Resources\VehicleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVehicle extends CreateRecord
{
    protected static string $resource = VehicleResource::class;
    protected function getCreateNotificationTitle(): ?string 
    {
        return 'Vehicle successfully registered..';
    }
    protected function getCreateNotification(): ?Notification 
    {
        return Notification::make()
         ->success()
         ->title('Vehicle added..')
         ->body(' New Vehicle successfully added..');
    }
}
