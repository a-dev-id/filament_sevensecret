<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCareers extends ManageRecords
{
    protected static string $resource = CareerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
