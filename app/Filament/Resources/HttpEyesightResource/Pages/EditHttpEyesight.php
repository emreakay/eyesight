<?php

namespace App\Filament\Resources\HttpEyesightResource\Pages;

use App\Filament\Resources\HttpEyesightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHttpEyesight extends EditRecord
{
    protected static string $resource = HttpEyesightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
