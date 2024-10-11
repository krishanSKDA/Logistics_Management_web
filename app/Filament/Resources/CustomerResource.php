<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class CustomerResource extends Resource
{
    protected static ?string $model = Customers::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Shipment Management';

    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('customer_name')
                        ->label('Full Name')
                        ->placeholder('Enter full name')
                        ->required(),
                    Forms\Components\TextInput::make('customer_email')
                        ->label('E-mail')
                        ->email()
                        ->placeholder('Enter email address')
                        ->required(),
                    Forms\Components\TextInput::make('customer_phone')
                        ->label('Phone Number')
                        ->placeholder('Enter phone number')
                        ->required(),
                    Forms\Components\TextInput::make('alternative_phone')
                        ->label('Alternative Phone Number')
                        ->placeholder('Enter alternative phone number')
                        ->nullable(),
                ])
                ->columns(2) 
                ->heading('Personal Information')
                ->description('Please provide the personal details of the customer.'),

            
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('customer_address')
                        ->label('Address')
                        ->placeholder('Enter address')
                        ->required(),
                    Forms\Components\TextInput::make('billing_address')
                        ->label('Billing Address')
                        ->placeholder('Enter billing address')
                        ->nullable(),
                    Forms\Components\Textarea::make('payment_info')
                        ->label('Payment Information')
                        ->placeholder('Enter payment information')
                        ->nullable(),
                ])
                ->columns(2) 
                ->heading('Additional Information')
                ->description('Provide any additional information related to the customer.'),

            // Hidden Field
            Forms\Components\Hidden::make('user_id')
                ->default(auth()->id()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_name')->label('Full Name'),
                Tables\Columns\TextColumn::make('customer_email')->label('E-mail'),
                Tables\Columns\TextColumn::make('customer_phone')->label('Phone Number'),
                Tables\Columns\TextColumn::make('alternative_phone')->label('Alternative Phone Number'),
                Tables\Columns\TextColumn::make('customer_address')->label('Address'),
                Tables\Columns\TextColumn::make('billing_address')->label('Billing Address'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()
                        ->successNotificationTitle('Customer successfully Updated.'),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->successNotificationTitle('Customer successfully deleted.'),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
