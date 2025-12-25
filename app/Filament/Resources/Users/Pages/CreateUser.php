<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getFormSchema(): array
    {
        return [
            Radio::make('role')
                ->label('Select Role')
                ->options([
                    'Super Admin' => 'Super Admin',
                    'Admin' => 'Admin',
                ])
                ->required()
                ->columns(2),

            TextInput::make('first_name')->required()->maxLength(50),
            TextInput::make('last_name')->required()->maxLength(50),
            TextInput::make('email')->email()->required()->unique(ignoreRecord: true),
            TextInput::make('phone')->required()->numeric()->rule('digits:10'),
            DatePicker::make('dob'),
            FileUpload::make('avatar')->image()->directory('avatars')->maxSize(2048),
            TextInput::make('address')->maxLength(255),
            TextInput::make('password')->password()->required()->confirmed()->revealable(),
            TextInput::make('password_confirmation')->password()->same('password')->revealable(),
        ];
    }
}
