<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehicleResource extends Resource
{
    protected static ?string $model =Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = ' Content Management';
    
    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('make')
                    ->required()
                    ->label('Manufacturer_Company'),
                Forms\Components\TextInput::make('vehicle_model')
                    ->label('Vehicle_Model')
                    ->required(),
                Forms\Components\TextInput::make('registration_number')
                    ->label('Vehicle_Reg_Number')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\DatePicker::make('year')
                    ->label('Manufacturer_Year')
                    ->required(),
                Forms\Components\Select::make('type')
                    ->label('Vehicle-Type')
                    ->options([
                        'plane' => 'Plane',
                        'truck' => 'Truck',
                        'ship' => 'Ship',
                        'other' => 'Other',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('make')->label('Manufacturer'),
                Tables\Columns\TextColumn::make('vehicle_model'),
                Tables\Columns\TextColumn::make('registration_number'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('type'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make()
                       
                ]),
                
            ])  
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }
}
