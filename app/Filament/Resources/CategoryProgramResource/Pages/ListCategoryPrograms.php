<?php

namespace App\Filament\Resources\CategoryProgramResource\Pages;

use App\Filament\Resources\CategoryProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryPrograms extends ListRecords
{
    protected static string $resource = CategoryProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
