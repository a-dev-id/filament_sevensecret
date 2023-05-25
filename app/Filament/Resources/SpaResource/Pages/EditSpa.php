<?php

namespace App\Filament\Resources\SpaResource\Pages;

use App\Filament\Resources\SpaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpa extends EditRecord
{
    protected static string $resource = SpaResource::class;

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
