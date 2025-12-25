<?php

namespace App\Filament\Resources\Schools\Grades\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Get;
use Filament\Schemas\Components\Utilities\Get as UtilitiesGet;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class GradesForm
{
    public static function configure(Schema $schema, $livewire): Schema
    {
        return $schema->components([
            TextInput::make('grade')
                ->required()
                ->unique(
                    table: 'grade_scales',
                    column: 'grade',
                    ignorable: fn($record) => $record,
                    modifyRuleUsing: fn(Unique $rule) => $rule->where('school_id', $livewire->getOwnerRecord()->id)
                ),

            TextInput::make('min_score')
                ->numeric()
                ->required()
                ->live(onBlur: true)
                ->rules([
                    fn(UtilitiesGet $get): \Closure => function (string $attribute, $value, \Closure $fail) use ($get, $livewire) {
                        $schoolId = $livewire->getOwnerRecord()->id;
                        $recordId = $get('id');

                        $overlap = DB::table('grade_scales')
                            ->where('school_id', $schoolId)
                            ->when($recordId, fn($q) => $q->where('id', '!=', $recordId))
                            ->where('min_score', '<=', $value)
                            ->where('max_score', '>=', $value)
                            ->exists();

                        if ($overlap) $fail("This score range is already taken.");
                    },
                ]),

            TextInput::make('max_score')
                ->numeric()
                ->required()
                ->live(onBlur: true)
                ->rules([
                    fn(UtilitiesGet $get): \Closure => function (string $attribute, $value, \Closure $fail) use ($get, $livewire) {
                        $schoolId = $livewire->getOwnerRecord()->id;
                        $recordId = $get('id');

                        $overlap = DB::table('grade_scales')
                            ->where('school_id', $schoolId)
                            ->when($recordId, fn($q) => $q->where('id', '!=', $recordId))
                            ->where('min_score', '<=', $value)
                            ->where('max_score', '>=', $value)
                            ->exists();

                        if ($overlap) $fail("This score range is already taken.");
                    },
                ]),

            TextInput::make('grade_point')->numeric()->required(),
        ]);
    }
}
