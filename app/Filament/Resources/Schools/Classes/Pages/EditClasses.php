<?php

namespace App\Filament\Resources\Schools\Classes\Pages;

use App\Filament\Resources\Schools\Classes\ClassesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClasses extends EditRecord
{
    protected static string $resource = ClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
