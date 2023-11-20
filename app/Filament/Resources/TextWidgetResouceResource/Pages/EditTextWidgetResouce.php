<?php

namespace App\Filament\Resources\TextWidgetResouceResource\Pages;

use App\Filament\Resources\TextWidgetResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTextWidgetResouce extends EditRecord
{
    protected static string $resource = TextWidgetResouceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
