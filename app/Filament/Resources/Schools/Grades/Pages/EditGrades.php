<?php

namespace App\Filament\Resources\schools\Grades\Pages;

use App\Filament\Resources\schools\Grades\GradesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGrades extends EditRecord
{
    protected static string $resource = GradesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
