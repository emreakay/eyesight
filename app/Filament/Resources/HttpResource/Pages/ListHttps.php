<?php

namespace App\Filament\Resources\HttpResource\Pages;

use App\Filament\Resources\HttpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHttps extends ListRecords
{
    protected static string $resource = HttpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
