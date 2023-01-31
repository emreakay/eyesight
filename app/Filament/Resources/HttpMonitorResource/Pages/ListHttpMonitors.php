<?php

namespace App\Filament\Resources\HttpMonitorResource\Pages;

use App\Filament\Resources\HttpMonitorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHttpMonitors extends ListRecords
{
    protected static string $resource = HttpMonitorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
