<?php

namespace App\Filament\Resources\ResortFacilityResource\Pages;

use App\Filament\Resources\ResortFacilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResortFacility extends EditRecord
{
    protected static string $resource = ResortFacilityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
