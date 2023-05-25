<?php

namespace App\Filament\Resources\HoneymoonResource\Pages;

use App\Filament\Resources\HoneymoonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHoneymoon extends EditRecord
{
    protected static string $resource = HoneymoonResource::class;

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
