<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Resources\Students\StudentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;

    /**
     * This hook runs immediately after the student is saved to the database.
     */
    protected function afterCreate(): void
    {
        // Assign the 'Student' role to the newly created user record
        $this->record->assignRole('Student');
    }

    // Optional: Redirect back to the list after creating a student
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
