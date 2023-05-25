<?php

namespace App\Filament\Resources\DayGuestResource\Pages;

use App\Filament\Resources\DayGuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDayGuests extends ListRecords
{
    protected static string $resource = DayGuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
