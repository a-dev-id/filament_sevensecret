<?php

namespace App\Filament\Resources\CssScriptResource\Pages;

use App\Filament\Resources\CssScriptResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCssScripts extends ManageRecords
{
    protected static string $resource = CssScriptResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
