<?php

namespace App\Filament\Widgets;

use App\Models\Feedback;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Customers;
use App\Models\vehicles;
use App\Models\Order;
use App\Models\Supplier;


class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    
    protected static ?int $sort =2;
    protected static bool $isLazy = true;
    
    protected function getStats(): array
    {
        return [

            Stat::make('Total Customers', Customers::count())
            ->description('Customers...')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            
            Stat::make('Total Suppliers', Supplier::count() )
            ->description('Suppliers..')
            ->color('primary')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            
            Stat::make('Pending Ordres',Order::count() )
            ->color('info')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-m-arrow-trending-down'),

            Stat::make('CustomerFeedBack',Feedback::count() )
            ->description('FeedBack..')
            ->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17,20])
            ->descriptionIcon('heroicon-m-arrow-trending-down'),

        ];
    }
}
