<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getFormActions(): array
    {
        return [
             Action::make('submit')
             ->label('Create')
             ->action('submit')
             ->color('primary')
             ->requiresConfirmation(false),  

         // Cancel button
         Action::make('cancel')
             ->label('Cancel')
             ->url($this->getRedirectUrl())
             ->color('gray'),
        ];
    }

    public function submit()
    {
        $this->create();

        return redirect()->to($this->getRedirectUrl());
    }
}
