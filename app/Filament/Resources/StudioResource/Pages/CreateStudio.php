<?php

    namespace App\Filament\Resources\StudioResource\Pages;

    use App\Filament\Resources\StudioResource;
    use Filament\Resources\Pages\CreateRecord;
    use function auth;

    class CreateStudio extends CreateRecord
    {
        protected static string $resource = StudioResource::class;

        protected function mutateFormDataBeforeCreate(array $data): array
        {
            if (!auth()->user()->hasAnyRole(['Super Admin', 'Admin'])) {
                $data['user_id'] = auth()->id();
            }

            return parent::mutateFormDataBeforeCreate($data);
        }
    }
