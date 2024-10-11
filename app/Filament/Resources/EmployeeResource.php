<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    
    protected static ?string $navigationGroup = 'Employee Management';

    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Employee Details')
                ->schema([
                    Forms\Components\TextInput::make('first_name')
                        ->label('First-Name')
                        ->required(),
                        Forms\Components\TextInput::make('last_name')
                    ->label('Last-Name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->unique(),
                Forms\Components\TextInput::make('phone')
                    ->label('MobileNumber')
                    ->required(),
                Forms\Components\TextInput::make('position')
                    ->label('Position')
                    ->required(),
               
                ]),
                Forms\Components\Select::make('gender')
                ->label('Gender')
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                    'Other' => 'Other',

                ]),
            Forms\Components\DatePicker::make('hire_date')
                ->label('Hire-Date')
                ->required()
               ->format('Y-m-d'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('hire_date'),
              
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
