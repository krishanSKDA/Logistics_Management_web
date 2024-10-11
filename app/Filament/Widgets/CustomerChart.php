<?php
namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use App\Models\Customers;
use App\Models\Order;
use App\Models\OrderDetail;


class CustomerChart extends ChartWidget
{
    protected static ?string $heading = 'Customer Chart';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = $this->getCustomerPerMonth();

        return [
            'datasets' => [
                [
                    'label' => 'Customers',
                    'data' => $data['CustomerPerMonth'],
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => $data['months'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
    
    private function getCustomerPerMonth(): array
    {
        $now = Carbon::now();
        $customerPerMonth = [];
        $months = [];

        for ($month = 1; $month <= 12; $month++) {
            $count = Customers::whereMonth('created_at', $month)
                             ->whereYear('created_at', $now->year)
                             ->count();
            $customerPerMonth[] = $count;
            $months[] = $now->month($month)->format('M');
        }

        return [
            'CustomerPerMonth' => $customerPerMonth,
            'months' => $months,
        ];
    }
}
