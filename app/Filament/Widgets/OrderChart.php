<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class OrderChart extends ChartWidget
{
    protected static ?string $heading = 'Order';
    protected static ?string $maxHeight = '200px';
    protected static string $color = 'info';

    protected function getData(): array
    {
        $data = Trend::model(Order::class)
        ->between(
            start: now()->startOfMonth(),
            end:now()->endOfMonth(),
        )
        ->perDay()
        ->count();

        return [
            'chart' => [
                'type' => 'line'
            ],
            'datasets' => [
                [
                    'label' => 'Ordered',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
