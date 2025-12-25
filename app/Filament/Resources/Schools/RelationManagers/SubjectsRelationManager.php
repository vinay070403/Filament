<?php

namespace App\Filament\Resources\Schools\RelationManagers;

use App\Filament\Resources\Subjects\Schemas\SubjectForm;
use Filament\Schemas\Schema;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Actions;

class SubjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'Subjects';

    //protected static ?string $relatedResource = SubjectResource::class;

    public function form(Schema $schema): Schema
    {
        return SubjectForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Subject Name')
                    ->sortable()
                    ->searchable(),

            ])
            ->headerActions([
                Actions\CreateAction::make(),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ]);
    }
}
