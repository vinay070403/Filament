<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use App\Models\Country;

class StateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('State Name')
                    ->required()
                    ->maxLength(100),

                // Country select dropdown
                Select::make('country_id')
                    ->label('Country')
                    ->required()
                    ->options(fn () => Country::pluck('name', 'id')->toArray()) // fetch from countries table
                    ->searchable(), // optional: adds search functionality
            ]);
    }
}
