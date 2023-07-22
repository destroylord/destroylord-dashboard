<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use App\Filament\Resources\PortofolioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePortofolios extends ManageRecords
{
    protected static string $resource = PortofolioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
