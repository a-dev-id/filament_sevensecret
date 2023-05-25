<?php

namespace App\Filament\Resources\DiningResource\Pages;

use App\Filament\Resources\DiningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDining extends EditRecord
{
    protected static string $resource = DiningResource::class;

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
