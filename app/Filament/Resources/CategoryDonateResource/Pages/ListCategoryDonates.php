<?php

namespace App\Filament\Resources\CategoryDonateResource\Pages;

use App\Filament\Resources\CategoryDonateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryDonates extends ListRecords
{
    protected static string $resource = CategoryDonateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
