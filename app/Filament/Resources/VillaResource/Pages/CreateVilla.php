<?php

namespace App\Filament\Resources\VillaResource\Pages;

use App\Filament\Resources\VillaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVilla extends CreateRecord
{
    protected static string $resource = VillaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
