<?php

namespace App\Filament\Resources\HttpMonitorResource\Pages;

use App\Filament\Resources\HttpMonitorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHttpMonitor extends EditRecord
{
    protected static string $resource = HttpMonitorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
