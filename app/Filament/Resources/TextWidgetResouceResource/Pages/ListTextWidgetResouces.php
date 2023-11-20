<?php

namespace App\Filament\Resources\TextWidgetResouceResource\Pages;

use App\Filament\Resources\TextWidgetResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTextWidgetResouces extends ListRecords
{
    protected static string $resource = TextWidgetResouceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
