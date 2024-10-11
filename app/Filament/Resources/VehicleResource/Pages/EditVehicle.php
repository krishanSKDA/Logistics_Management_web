<?php

namespace App\Filament\Resources\VehicleResource\Pages;

use App\Filament\Resources\VehicleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVehicle extends EditRecord
{
    protected static string $resource = VehicleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getSaveNotification(): ?Notification 
    {
        return Notification::make()
         ->success()
         ->title('Vehicle updated..')
         ->body(' Vehicle information successfully updated..');
    }
}
