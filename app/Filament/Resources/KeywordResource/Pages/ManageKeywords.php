<?php

namespace App\Filament\Resources\KeywordResource\Pages;

use App\Filament\Resources\KeywordResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKeywords extends ManageRecords
{
    protected static string $resource = KeywordResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
