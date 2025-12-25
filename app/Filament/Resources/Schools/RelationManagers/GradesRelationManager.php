<?php

namespace App\Filament\Resources\Schools\RelationManagers;

use App\Filament\Resources\Schools\Grades\Schemas\GradesForm;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions;
use Filament\Schemas\Schema;

class GradesRelationManager extends RelationManager
{
    protected static string $relationship = 'gradeScale';

    public function form(Schema $schema): Schema
    {
        // Pass $this so the Schema class can see the school_id for validation
        return GradesForm::configure($schema, $this);
    }
    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('grade')->label('Grade'),
                TextColumn::make('min_score')->label('Min'),
                TextColumn::make('max_score')->label('Max'),
                TextColumn::make('grade_point')->label('Point'),
            ])
            ->headerActions([
                Actions\CreateAction::make(),

            ])
            ->recordActions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ]);
    }
}
