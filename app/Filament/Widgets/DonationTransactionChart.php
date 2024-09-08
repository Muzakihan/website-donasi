<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DonationTransactionChart extends ChartWidget
{
    protected static ?string $heading = 'Donation Transaction Chart';

    use InteractsWithPageFilters;

    protected function getData(): array
    {
        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            now()->startOfMonth();

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
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(donate_price) as total'))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        if ($donateId != null) {
            $labels = $transactions->pluck('date')->toArray();
            $data = $transactions->pluck('total')->toArray();
        } else {
            $labels = [];
            $data = [];
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Donations',
                    'data' => $data,
                    'borderColor' => '#4CAF50',
                    'backgroundColor' => 'rgba(76, 175, 80, 0.2)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
