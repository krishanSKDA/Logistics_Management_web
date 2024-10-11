<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Employee;

class EmployeeChart extends ChartWidget
{
    protected static ?string $heading = 'Employee Chart';
    protected static ?int $sort = 5;

    protected function getData(): array
    {
        $employees = Employee::all();
        
        $data = $employees->map(function ($employee) {
            return [
                'x' => $employee->hire_date->timestamp, 
                'y' => $this->getPositionValue($employee->position),
            ];
        });

        return [
            'datasets' => [
                [
                    'label' => 'Employees',
                    'data' => $data,
                ]
            ],
        ];
    }

    protected function getType(): string
    {
        return 'scatter';
    }

    private function getPositionValue(string $position): int
    {
        $positions = [
            'Manager' => 1,
            'Developer' => 2,
            'Designer' => 3,
            'QA' => 4,
            'Support' => 5,
        ];

        return $positions[$position] ?? 0; // default to 0 if the position is not found
    }
}
