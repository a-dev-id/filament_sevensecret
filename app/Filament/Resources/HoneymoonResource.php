<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HoneymoonResource\Pages;
use App\Filament\Resources\HoneymoonResource\RelationManagers;
use App\Filament\Resources\HoneymoonResource\RelationManagers\ImagesRelationManager;
use App\Models\Honeymoon;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class HoneymoonResource extends Resource
{
    protected static ?string $model = Honeymoon::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'General';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make('General')
                        ->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(191)
                                    ->reactive()
                                    ->afterStateUpdated(function (Closure $set, $state) {
                                        $set('slug', Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->maxLength(191),
                            ]),
                            Grid::make(1)->schema([
                                Forms\Components\TextInput::make('subtitle')
                                    ->maxLength(191),
                                Forms\Components\Textarea::make('excerpt')
                                    ->maxLength(65535),
                                RichEditor::make('description')
                            ]),
                        ])
                        ->collapsible()
                        ->compact(),
                    Section::make('SEO')
                        ->schema([
                            Grid::make(1)->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->maxLength(191),
                                Forms\Components\Textarea::make('meta_description')
                                    ->maxLength(65535),
                            ]),
                        ])
                        ->collapsible()
                        ->compact(),
                ])->columnSpan(2),
                Grid::make()->schema([
                    Section::make('Image')
                        ->schema([
                            Grid::make(2)->schema([
                                FileUpload::make('banner_image')->label('Header Image'),
                                FileUpload::make('cover_image')->label('Cover Image'),
                            ]),
                        ])
                        ->collapsible()
                        ->compact(),

                    Section::make('Additional')
                        ->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('button_text')
                                    ->maxLength(191),
                                Forms\Components\TextInput::make('button_link')
                                    ->maxLength(191),
                            ]),
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('price')
                                    ->maxLength(191),
                                TextInput::make('per'),
                                Forms\Components\TextInput::make('promo_code')
                                    ->maxLength(191),
                                TextInput::make('min_night')->label('Minimum Nights'),
                            ]),
                            Grid::make(1)->schema([
                                Toggle::make('is_active')
                                    ->label('Publish')
                                    ->inline(false)
                                    ->onColor('success')
                                    ->offColor('secondary')
                            ]),
                        ])
                        ->collapsible()
                        ->compact(),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')->square()->label('Image'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('is_active')->label('Published'),
                IconColumn::make('is_active')->label('Published')
                    ->options([
                        'heroicon-o-x-circle' => 0,
                        'heroicon-o-check-circle' => 1,
                    ])
                    ->colors([
                        'secondary' => 0,
                        'success' => 1,
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ImagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHoneymoons::route('/'),
            'create' => Pages\CreateHoneymoon::route('/create'),
            'edit' => Pages\EditHoneymoon::route('/{record}/edit'),
        ];
    }
}
