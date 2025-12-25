<?php

namespace App\Filament\Resources\schools\Grades;

use App\Filament\Resources\schools\Grades\Pages\CreateGrades;
use App\Filament\Resources\schools\Grades\Pages\EditGrades;
use App\Filament\Resources\schools\Grades\Pages\ListGrades;
use App\Filament\Resources\schools\Grades\Schemas\GradesForm;
use App\Filament\Resources\schools\Grades\Tables\GradesTable;
use App\Models\GradeScale;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Schemas\Schema;

class GradesResource extends Resource
{
    protected static ?string $model = GradeScale::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return GradesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GradesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGrades::route('/'),
            'create' => CreateGrades::route('/create'),
            'edit' => EditGrades::route('/{record}/edit'),
        ];
    }
}
