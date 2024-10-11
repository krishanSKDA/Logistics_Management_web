<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Filament\Resources\OrdersResource;


class LatestOrderChart extends BaseWidget
{
   
    protected static ?int $sort = 6;
    protected int | string | array $columnSpan = 'full';
    protected static ?string $label = 'Latest Order Chart';
    public function table(Table $table): Table
    {
        return $table
            ->query(OrdersResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at','desc')
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('Customer.Customer_name')->label('Customer Name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order_number')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('order_date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('total_amount')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime('F j, Y, g:i a')->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('F j, Y, g:i a')->sortable(),
            ]);
    }
}
