<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DriverResource\Pages;
use App\Filament\Resources\DriverResource\RelationManagers;
use App\Models\Drivers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DriverResource extends Resource
{
    protected static ?string $model = Drivers::class;
    protected static ?string $navigationGroup = ' Content Management';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->description('Basic details of the driver')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Driver Name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->required()
                            ->email()
                            ->label('Email')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone_number')
                            ->required()
                            ->label('Phone Number')
                            ->maxLength(15),
                        Forms\Components\TextInput::make('license_number')
                            ->required()
                            ->label('License Number')
                            ->maxLength(20),
                    ]),

                Forms\Components\Section::make('Work Information')
                    ->description('Details related to the driver\'s work')
                    ->schema([
                        Forms\Components\DatePicker::make('dob')
                            ->required()
                            ->label('Date of Birth'),
                        Forms\Components\DatePicker::make('start_date')
                            ->required()
                            ->label('Start Date'),
                        Forms\Components\Toggle::make('availability')
                            ->label('Available')
                            ->inline(false)
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Driver Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Phone Number'),
                Tables\Columns\TextColumn::make('license_number')
                    ->label('License Number'),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->date(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Start Date')
                    ->date(),
                Tables\Columns\BooleanColumn::make('availability')
                    ->label('Available'),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define any relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDrivers::route('/'),
            'create' => Pages\CreateDriver::route('/create'),
            'edit' => Pages\EditDriver::route('/{record}/edit'),
        ];
    }
}
