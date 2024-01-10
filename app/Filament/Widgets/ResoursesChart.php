<?php

namespace App\Filament\Widgets;

use App\Models\cms;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class ResoursesChart extends ChartWidget
{
    protected static ?string $heading = 'Resources';
    protected static string $color = 'info';

    protected function getData(): array
    {
        $data = Trend::model(cms::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Resources',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
