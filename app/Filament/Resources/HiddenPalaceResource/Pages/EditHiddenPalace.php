<?php

namespace App\Filament\Resources\HiddenPalaceResource\Pages;

use App\Filament\Resources\HiddenPalaceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHiddenPalace extends EditRecord
{
    protected static string $resource = HiddenPalaceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
