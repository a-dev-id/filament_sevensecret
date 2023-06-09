<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HiddenPalaceResource\Pages;
use App\Filament\Resources\HiddenPalaceResource\RelationManagers;
use App\Filament\Resources\HiddenPalaceResource\RelationManagers\FacilitiesRelationManager;
use App\Filament\Resources\HiddenPalaceResource\RelationManagers\ImagesRelationManager;
use App\Models\HiddenPalace;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use App\Models\Keyword;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;

class HiddenPalaceResource extends Resource
{
    protected static ?string $model = HiddenPalace::class;

    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-s-library';
    protected static ?string $navigationGroup = 'General';
    protected static bool $shouldRegisterNavigation = false;

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
                                Select::make('meta_keyword')
                                    ->options(Keyword::all()->pluck('title', 'title'))
                                    ->multiple(),
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
                                TextInput::make('per')
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
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                ImageColumn::make('cover_image')->label('Image')->square(),
                Tables\Columns\TextColumn::make('is_active')->label('Published'),
                Tables\Columns\BadgeColumn::make('is_active')->label('Status')
                    ->enum([
                        0 => 'Draft',
                        1 => 'Published',
                    ])
                    ->colors([
                        'danger' => 0,
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
            FacilitiesRelationManager::class,
            ImagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHiddenPalaces::route('/'),
            'create' => Pages\CreateHiddenPalace::route('/create'),
            'edit' => Pages\EditHiddenPalace::route('/{record}/edit'),
        ];
    }
}
