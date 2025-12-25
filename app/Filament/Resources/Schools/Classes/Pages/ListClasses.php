<?php

namespace App\Filament\Resources\Schools\Classes\Pages;

use App\Filament\Resources\Schools\Classes\ClassesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClasses extends ListRecords
{
    protected static string $resource = ClassesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
