<?php

namespace App\Filament\Resources\AwardResource\Pages;

use App\Filament\Resources\AwardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAwards extends ManageRecords
{
    protected static string $resource = AwardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
