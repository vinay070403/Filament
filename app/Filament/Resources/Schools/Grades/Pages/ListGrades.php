<?php

namespace App\Filament\Resources\schools\Grades\Pages;

use App\Filament\Resources\schools\Grades\GradesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGrades extends ListRecords
{
    protected static string $resource = GradesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
