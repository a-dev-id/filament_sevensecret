<?php

namespace App\Filament\Resources\ResortFacilityResource\Pages;

use App\Filament\Resources\ResortFacilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResortFacilities extends ListRecords
{
    protected static string $resource = ResortFacilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
