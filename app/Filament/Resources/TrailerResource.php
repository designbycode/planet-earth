<?php

    namespace App\Filament\Resources;

    use App\Filament\Resources\TrailerResource\Pages;
    use App\Filament\Resources\TrailerResource\RelationManagers;
    use App\Models\Trailer;
    use Filament\Forms;
    use Filament\Forms\Form;
    use Filament\Resources\Resource;
    use Filament\Tables;
    use Filament\Tables\Table;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\SoftDeletingScope;

    class TrailerResource extends Resource
    {
        protected static ?string $model = Trailer::class;

        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('code')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('author')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\RichEditor::make('description')
                        ->columnSpanFull(),
                ]);
        }

        public static function table(Table $table): Table
        {
            return $table
                ->columns([
                    Tables\Columns\TextColumn::make('title')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('code')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('author')
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
                'index' => Pages\ListTrailers::route('/'),
                'create' => Pages\CreateTrailer::route('/create'),
                'edit' => Pages\EditTrailer::route('/{record}/edit'),
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
