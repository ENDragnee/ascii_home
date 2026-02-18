<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use App\Models\Media;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Portfolio Management';

    /**
     * It is recommended to manage media via the Portfolio resource.
     * Creating media without a portfolio is disabled by default.
     */
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Image File')
                    ->description('Replace the image or view its metadata.')
                    ->schema([
                        FileUpload::make('url')
                            ->label('Image File')
                            ->image()
                            ->disk('public')
                            ->directory('portfolio-media')
                            ->live() // Allows the hook to run immediately
                            ->afterStateUpdated(function (Set $set, ?TemporaryUploadedFile $state) {
                                if (! $state) {
                                    return;
                                }
                                $set('mime_type', $state->getMimeType());
                                $set('file_size', $state->getSize());
                            })
                            ->columnSpanFull(),

                        // These hidden fields capture the auto-populated data
                        Hidden::make('mime_type'),
                        Hidden::make('file_size'),
                    ]),

                Section::make('Details')
                    ->description('Manage how this image is used and displayed.')
                    ->schema([
                        Select::make('portfolio_id')
                            ->relationship('portfolio', 'title') // 'portfolio' is the function name, 'title' is the column to display
                            ->searchable()
                            ->required()
                            ->helperText('The portfolio this image belongs to.'),

                        TextInput::make('alt_text')
                            ->label('Alternative Text (for SEO & Accessibility)')
                            ->placeholder('e.g. Screenshot of the project dashboard'),

                        Toggle::make('is_thumbnail')
                            ->label('Use as Portfolio Thumbnail/Background')
                            ->helperText('Enable this for the main image of a project.'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('url')
                    ->disk('public') // Tell the table to look in the public disk
                    ->label('Preview')
                    ->square(),

                TextColumn::make('portfolio.title')
                    ->label('Assigned Portfolio')
                    ->searchable()
                    ->sortable()
                    ->url(fn (Media $record): string => PortfolioResource::getUrl('edit', ['record' => $record->portfolio_id])),

                TextColumn::make('alt_text')
                    ->searchable()
                    ->limit(40),

                IconColumn::make('is_thumbnail')
                    ->label('Thumbnail')
                    ->boolean(),

                TextColumn::make('file_size')
                    ->label('Size')
                    ->formatStateUsing(fn ($state) => $state ? number_format($state / 1024, 1).' KB' : '-')
                    ->sortable(),

                TextColumn::make('mime_type')
                    ->label('Type')
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMedia::route('/'),
            // 'create' => Pages\CreateMedia::route('/create'), // Disabled
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
