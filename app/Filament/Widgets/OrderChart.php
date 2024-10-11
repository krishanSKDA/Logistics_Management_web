<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrderChart extends ChartWidget
{
    protected static ?string $heading = 'Order';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        // Fetch the order count grouped by order_type (replace with the desired column)
        $data = Order::select('order_type', DB::raw('count(*) as count'))
            ->groupBy('order_type')
            ->get()
            ->toArray();

        $labels = [];
        $counts = [];

        foreach ($data as $row) {
            $labels[] = $row['order_type']; 
            $counts[] = $row['count'];      
        }

        return [
            'datasets' => [
                [
                    'label' => 'Orders by Type',
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'], 
                    'data' => $counts
                ]
            ],
            'labels' => $labels
        ];
    }

    protected function getType(): string
    {
        return 'bar'; 
    }
}
