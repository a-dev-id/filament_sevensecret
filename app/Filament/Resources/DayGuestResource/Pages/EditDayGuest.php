<?php

namespace App\Filament\Resources\DayGuestResource\Pages;

use App\Filament\Resources\DayGuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDayGuest extends EditRecord
{
    protected static string $resource = DayGuestResource::class;

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
