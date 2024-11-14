<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

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
