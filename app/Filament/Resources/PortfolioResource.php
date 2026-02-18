<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    // The icon that appears in the sidebar
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Project Details')
                    ->description('General information about the project.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. ASCII Payment Gateway'),

                                TextInput::make('link')
                                    ->label('Project Website URL')
                                    ->url()
                                    ->placeholder('https://example.com')
                                    ->helperText('Leave empty if this project is not a public website.'),

                                ColorPicker::make('color')
                                    ->label('Brand Accent Color')
                                    ->default('#00ffd4')
                                    ->required(),
                            ]),

                        Textarea::make('description')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),

                Section::make('Visual Assets')
                    ->description('Manage background images and screenshots for this project.')
                    ->schema([
                        Repeater::make('media')
                            ->relationship('media')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Image')
                                    ->image()
                                    ->directory('portfolio-media')
                                    ->disk('public') // Explicitly set the disk
                                    ->required()
                                    ->live() // Essential: triggers the hook immediately after upload
                                    ->afterStateUpdated(function (Set $set, ?TemporaryUploadedFile $state) {
                                        if (! $state) {
                                            return;
                                        }
                                        // Automatically populate the hidden fields
                                        $set('mime_type', $state->getMimeType());
                                        $set('file_size', $state->getSize());
                                    }),

                                // These hidden fields map to your database columns
                                Hidden::make('mime_type'),
                                Hidden::make('file_size'),

                                Toggle::make('is_thumbnail')
                                    ->label('Main Thumbnail')
                                    ->default(false),

                                TextInput::make('alt_text')
                                    ->label('Alt Text')
                                    ->placeholder('Description for SEO'),
                            ])
                            ->columns(2)
                            ->grid(1),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Displays the first image from the media relationship
                ImageColumn::make('media.url')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->circular()
                    ->stacked()
                    ->limit(1),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                ColorColumn::make('color')
                    ->label('Accent'),

                TextColumn::make('link')
                    ->label('Website')
                    ->icon('heroicon-m-arrow-top-right-on-square')
                    ->color('primary')
                    ->limit(20),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
