<?php

namespace App\Filament\Resources\Schools\Classes;

use App\Filament\Resources\Schools\Classes\Pages\CreateClasses;
use App\Filament\Resources\Schools\Classes\Pages\EditClasses;
use App\Filament\Resources\Schools\Classes\Pages\ListClasses;
use App\Filament\Resources\Classes\Schemas\ClassesForm;
use App\Filament\Resources\Classes\Tables\ClassesTable;
use App\Models\SchoolClass;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ClassesResource extends Resource
{
    protected static ?string $model = SchoolClass::class;

    //protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Schema $schema): Schema
    {
        return ClassesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClasses::route('/'),
            'create' => CreateClasses::route('/create'),
            'edit' => EditClasses::route('/{record}/edit'),
        ];
    }
}
