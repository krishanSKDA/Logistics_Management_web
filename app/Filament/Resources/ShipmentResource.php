<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShipmentResource\Pages;
use App\Models\Shipment;
use App\Models\Order; // Assuming you have an Order model
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ShipmentResource extends Resource
{
    protected static ?string $model = Shipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    
    protected static ?string $navigationGroup = 'Shipment Management';
    
    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('order_id')
                    ->label('Order')
                    ->relationship('order', 'id') // Assuming there's a relationship with Order model
                    ->required(),
                    
                Forms\Components\TextInput::make('tracking_number')
                    ->label('Tracking Number')
                    ->nullable()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('carrier')
                    ->label('Carrier')
                    ->nullable()
                    ->maxLength(255),
                    
                Forms\Components\DatePicker::make('shipped_date')
                    ->label('Shipped Date')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order.id')
                    ->label('Order ID')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('tracking_number')
                    ->label('Tracking Number'),
                    
                Tables\Columns\TextColumn::make('carrier')
                    ->label('Carrier'),
                    
                Tables\Columns\TextColumn::make('shipped_date')
                    ->label('Shipped Date')
                    ->date(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShipments::route('/'),
            'create' => Pages\CreateShipment::route('/create'),
            'edit' => Pages\EditShipment::route('/{record}/edit'),
        ];
    }
}
