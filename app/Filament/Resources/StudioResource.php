<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\StudioResource\Pages;
    use App\Filament\Resources\StudioResource\RelationManagers;
    use App\Models\Studio;
    use Filament\Forms;
    use Filament\Forms\Form;
    use Filament\Forms\Set;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\SoftDeletingScope;
    use Illuminate\Support\Str;

    class StudioResource extends Resource
    {
        protected static ?string $model = Studio::class;

        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\Select::make('user_id')
                        ->relationship('user', 'name')
                        ->hidden(!auth()->user()->hasAnyRole(['Super Admin', 'Admin']))
                        ->columnSpanFull()
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, string $state) => $set('slug', Str::slug($state)))
                        ->maxLength(191),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\Textarea::make('description')
                        ->rows(4)
                        ->cols(80)
                        ->columnSpanFull(),
                    Forms\Components\RichEditor::make('content')
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('website')
                        ->maxLength(191),
                    Forms\Components\TextInput::make('contact_email')
                        ->email()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->maxLength(191),
                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    Tables\Columns\TextColumn::make('user.name')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('name')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('slug')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('website')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('contact_email')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('phone')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('deleted_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('created_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('updated_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                ])
                ->filters([
                    Tables\Filters\TrashedFilter::make(),
                ])
                ->actions([
                    Tables\Actions\EditAction::make(),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                        Tables\Actions\ForceDeleteBulkAction::make(),
                        Tables\Actions\RestoreBulkAction::make(),
                    ]),
                ]);
        }

        public static function getRelations(): array
        {
            return [
                //
            ];
        }

        public static function getPages(): array
        {
            return [
                'index' => Pages\ListStudios::route('/'),
                'create' => Pages\CreateStudio::route('/create'),
                'edit' => Pages\EditStudio::route('/{record}/edit'),
            ];
        }

        public static function getEloquentQuery(): Builder
        {
            return parent::getEloquentQuery()
                ->withoutGlobalScopes([
                    SoftDeletingScope::class,
                ]);
        }
    }
