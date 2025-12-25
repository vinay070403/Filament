<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;


class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('avatar')
                    ->avatar(),
                DatePicker::make('date_of_birth')
                    ->required(),
                TextInput::make('name')
                    ->label('First Name')
                    ->required()
                    ->maxLength(100),
                TextInput::make('last_name')
                    ->required()->maxLength(100),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(150)
                    ->unique(ignoreRecord: true),
                TextInput::make('phone_number')
                    ->required()
                    ->maxLength(10),
                TextInput::make('password')
                    ->password()
                    ->required(fn(string $operation) => $operation === 'create')
                    ->dehydrated(fn($state) => filled($state))
                    ->maxLength(255),
                Select::make('roles')
                    ->multiple()
                    ->relationship(
                        name: 'roles',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn(Builder $query) => $query->whereIn('name', ['super_admin', 'panel_user', 'Admin'])
                    )
                    ->preload()
                    ->searchable()

            ]);
    }
}
