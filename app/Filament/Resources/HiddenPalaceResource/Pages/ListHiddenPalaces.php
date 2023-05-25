<?php

namespace App\Filament\Resources\HiddenPalaceResource\Pages;

use App\Filament\Resources\HiddenPalaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHiddenPalaces extends ListRecords
{
    protected static string $resource = HiddenPalaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
