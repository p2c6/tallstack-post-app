<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Pages\Actions\ButtonAction;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getFormActions(): array
    {
        return [
             ButtonAction::make('submit')
             ->label('Create')
             ->action('submit')
             ->color('primary')
             ->requiresConfirmation(false),  

         // Cancel button
         ButtonAction::make('cancel')
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
