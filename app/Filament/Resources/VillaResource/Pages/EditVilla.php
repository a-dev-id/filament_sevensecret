<?php

namespace App\Filament\Resources\VillaResource\Pages;

use App\Filament\Resources\VillaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVilla extends EditRecord
{
    protected static string $resource = VillaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
