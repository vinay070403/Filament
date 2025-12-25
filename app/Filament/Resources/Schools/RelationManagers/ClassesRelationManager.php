<?php

namespace App\Filament\Resources\Schools\RelationManagers;

use App\Filament\Resources\Classes\Schemas\ClassesForm;
use Filament\Schemas\Schema;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Actions;

class ClassesRelationManager extends RelationManager
{
    protected static string $relationship = 'classes';

    public function form(Schema $schema): Schema
    {
        return ClassesForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Class Name')
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
