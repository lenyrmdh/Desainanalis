<?php

namespace App\Filament\Admin\Resources\CoachesResource\Pages;

use App\Filament\Admin\Resources\CoachesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoaches extends EditRecord
{
    protected static string $resource = CoachesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
