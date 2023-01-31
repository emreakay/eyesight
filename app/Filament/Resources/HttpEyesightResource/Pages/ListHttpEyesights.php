<?php

namespace App\Filament\Resources\HttpEyesightResource\Pages;

use App\Filament\Resources\HttpEyesightResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHttpEyesights extends ListRecords
{
    protected static string $resource = HttpEyesightResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
