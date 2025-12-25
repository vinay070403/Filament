<?php

namespace App\Filament\Resources\Students;

use App\Filament\Resources\Students\Pages\CreateStudent;
use App\Filament\Resources\Students\Pages\EditStudent;
use App\Filament\Resources\Students\Pages\Grades as PagesGrades;
use App\Filament\Resources\Students\Pages\ListStudents;
use App\Filament\Resources\Students\Schemas\StudentForm;
use App\Filament\Resources\Students\Tables\StudentsTable;
use App\Filament\Student\Pages\Grades;
use App\Models\StudentGrade;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder; // Added this import

class StudentResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationLabel = 'Students';
    protected static ?string $modelLabel = 'Student';
    protected static ?string $pluralModelLabel = 'Students';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    // Remove the afterCreate hook from here, it belongs in the CreateStudent PAGE file
    // protected static function afterCreate(User $record): void
    // {
    //     $record->assignRole('Student');
    // }

    // Add this method to filter the table list
    public static function getEloquentQuery(): Builder
    {
        // Only fetch users who have the 'Student' role assigned via Spatie
        return parent::getEloquentQuery()->role('Student');
    }

    // ... (rest of the file remains unchanged) ...

    public static function form(Schema $schema): Schema
    {
        return StudentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentsTable::configure($table);
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            EditStudent::class,
            PagesGrades::class,
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStudents::route('/'),
            'create' => CreateStudent::route('/create'),
            'edit' => EditStudent::route('/{record}/edit'),
            'grades' => PagesGrades::route('/{record}/grades'),
        ];
    }
}
