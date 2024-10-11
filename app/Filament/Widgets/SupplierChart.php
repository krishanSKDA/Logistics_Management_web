<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\Charts\Chart;
use Filament\Widgets\Charts\Options\RadarOptions;
use Filament\Widgets\Charts\Types\RadarChart;
use Filament\Widgets\Contracts\HasData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;


class SupplierChart extends ChartWidget
{
    protected static ?string $heading = ' SupplierChart';
    protected static ?int $sort = 4;
    protected function getData(): array
    {
        $data = Supplier::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as count')
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

        // Fill missing months with 0 counts
        $formattedData = [];
        for ($i = 1; $i <= 12; $i++) {
            $formattedData[] = $data[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Suppliers Added',
                    'data' => $formattedData,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December',
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
