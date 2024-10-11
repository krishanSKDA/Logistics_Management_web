<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class OrdersResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Shipment Management';
    
    public static function getNavigationBadge(): ?string{
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Order Details Section
                Forms\Components\Section::make('Order Details')
                    ->description('Fill in the order details.')
                    ->schema([
                        Forms\Components\Select::make('customer_id')
                            ->label('Customer Name')
                            ->relationship('Customer', 'Customer_name')
                            ->required(),
                        Forms\Components\TextInput::make('order_number')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\DatePicker::make('order_date')
                            ->required(),
                            Forms\Components\Select::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'shipped' => 'Shipped',
                                'in transit' => 'In Transit',
                                'delivered' => 'Delivered',
                                'canceled' => 'Canceled',
                            ])
                            ->required()
                            ->default('pending'), 
                        
                    ]),

                // Package Information Section
                Forms\Components\Section::make('Package Information')
                    ->description('Provide details about the package.')
                    ->schema([
                        Forms\Components\TextInput::make('package_size')
                            ->required()
                            ->label('Package Size'),
                        Forms\Components\TextInput::make('package_weight')
                            ->required()
                            ->label('Package Weight (kg)'),
                        Forms\Components\Textarea::make('shipping_address')
                            ->required()
                            ->label('Shipping Address'),
                        Forms\Components\Textarea::make('delivery_instructions')
                            ->label('Delivery Instructions'),
                    ]),

                // Receiver Information Section
                Forms\Components\Section::make('Receiver Information')
                    ->description('Provide details about the receiver.')
                    ->schema([
                        Forms\Components\TextInput::make('receiver_name')
                            ->required()
                            ->label('Receiver Name'),
                        Forms\Components\TextInput::make('order_type')
                            ->required()
                            ->label('Order Type'),
                    ]),

                // Payment Information Section
                Forms\Components\Section::make('Payment Information')
                    ->description('Enter the payment details.')
                    ->schema([
                        Forms\Components\TextInput::make('total_amount')
                            ->required()
                            ->numeric()
                            ->step(0.01)
                            ->label('Total Amount ( $ )'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('Customer.Customer_name')->label('Customer Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order_date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_amount')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('F j, Y, g:i a')->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('F j, Y, g:i a')->sortable(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
