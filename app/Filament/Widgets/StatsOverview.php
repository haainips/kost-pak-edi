<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customer', User::count())
            ->chart([2,1,4,5,6])
            ->color('success'),
            Stat::make('Total Orderan', Order::count())
            ->chart([1,1,3,5,7])
            ->color('success'),
            Stat::make('Total Penjualan', Order::where('status', 'Paid')
            ->sum('total_harga')),

        ];
    }
}
