<?php

namespace App\Filament\Resources\Students\Pages;


use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\Students\StudentResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class Grades extends Page
{
    use InteractsWithRecord;

    protected static string $resource = StudentResource::class;

    protected string $view = 'filament.resources.students.pages.grades';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }

    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('avatar')
                    ->avatar(),

                DatePicker::make('date_of_birth')->required(),

                TextInput::make('name')
                    ->required()
                    ->maxLength(100),

                TextInput::make('last_name')
                    ->required()
                    ->maxLength(100),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(150)
                    ->unique(ignoreRecord: true), // Prevent duplicate emails

                TextInput::make('phone_number')
                    ->tel()
                    ->required()
                    ->maxLength(10),

                TextInput::make('password')
                    ->password()
                    ->required(fn(string $operation) => $operation === 'create')
                    ->dehydrated(fn($state) => filled($state))
                    ->maxLength(255),
            ]);
    }
}
