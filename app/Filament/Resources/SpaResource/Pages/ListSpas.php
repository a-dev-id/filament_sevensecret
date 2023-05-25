<?php

namespace App\Filament\Resources\SpaResource\Pages;

use App\Filament\Resources\SpaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpas extends ListRecords
{
    protected static string $resource = SpaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
