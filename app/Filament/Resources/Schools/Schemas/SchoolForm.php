<?php

namespace App\Filament\Resources\Schools\Schemas;

use App\Models\State;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SchoolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //Section::make('')
                //  ->schema([
                TextInput::make('name'),
                Select::make('state_id')
                    ->label('State')
                    ->required()
                    ->options(fn() => State::pluck('name', 'id')->toArray()) // fetch from countries table
                    ->searchable(), // optional: adds search functionality
                Textarea::make('address')
                    ->columnSpanFull(),
            ]);
        //->columnspanFull()

        // ]);
    }
}
