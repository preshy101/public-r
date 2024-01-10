<?php

namespace App\Filament\Widgets;

use Flowframe\Trend\Trend;
use App\Models\imageGallery;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class GalleryChart extends ChartWidget
{
    protected static ?string $heading = 'Gallery';

    protected static string $color = 'denger';

    protected function getData(): array
    {
        $data = Trend::model(imageGallery::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Gallery',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'bubble';
    }
}
