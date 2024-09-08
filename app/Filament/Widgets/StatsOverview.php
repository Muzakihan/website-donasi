<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();

        $donateId = $this->filters['donate_id'] ?? null;

        $transactions = DB::table('transactions')
            ->when($donateId, function ($query, $donateId) {
                return $query->where('donate_id', $donateId);
            })
            ->when($startDate, function ($query) use ($startDate) {
                return $query->whereDate('created_at', '>=', $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                return $query->whereDate('created_at', '<=', $endDate);
            })
            ->get();

        if ($donateId == null) {
            $revenue = 0;
            $donatur = 0;
        } else {
            $revenue = $transactions->sum('donate_price');
            $donatur = $transactions->count();
        }

        $donateGoal = DB::table('donates')
            ->where('id', $donateId)
            ->value('goal_price') ?? 0;

        return [
            Stat::make('Number of Donors', $donatur)
                ->description('Detailed description here')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Donation Amount', 'Rp ' . number_format($revenue, 0, ',', '.'))
                ->description('Detailed description here')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Donation Goal amount', 'Rp ' . number_format($donateGoal, 0, ',', '.'))
                ->description('Detailed description here')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
