<?php

namespace App\Filament\Resources\VillaResource\Pages;

use App\Filament\Resources\VillaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVillas extends ListRecords
{
    protected static string $resource = VillaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
