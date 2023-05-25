<?php

namespace App\Filament\Resources\LandingPageResource\RelationManagers;

use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PackagesRelationManager extends RelationManager
{
    protected static string $relationship = 'Packages';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Section::make('General')
                        ->schema([
                            Grid::make(1)->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(191),
                                Forms\Components\TextInput::make('subtitle')
                                    ->maxLength(191),
                                Forms\Components\Textarea::make('excerpt')
                                    ->maxLength(65535),
                                RichEditor::make('description')
                            ]),
                        ])
                        ->collapsible()
                        ->compact(),
                ])->columnSpan(2),

                Grid::make()->schema([
                    Section::make('Image')
                        ->schema([
                            Grid::make(1)->schema([
                                FileUpload::make('cover_image')->label('Cover Image'),
                            ]),
                        ])
                        ->collapsible()
                        ->compact(),

                    Section::make('Additional')
                        ->schema([
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('button_text')
                                    ->maxLength(191)
                                    ->label('Text'),
                                Forms\Components\TextInput::make('button_link')
                                    ->maxLength(191)
                                    ->label('Link'),
                                Forms\Components\TextInput::make('price')
                                    ->maxLength(191)
                                    ->label('Price'),
                                Forms\Components\TextInput::make('per')
                                    ->maxLength(191)
                                    ->label('Per'),
                                Forms\Components\TextInput::make('min_night')
                                    ->maxLength(191)
                                    ->label('Minimum Night'),
                                Forms\Components\TextInput::make('min_person')
                                    ->maxLength(191)
                                    ->label('Minimum Person'),
                            ]),
                            Grid::make(1)->schema([
                                Forms\Components\TextInput::make('promo_code')
                                    ->maxLength(191),
                                TextInput::make('Promo Code')
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
                ])->columnSpan(2),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')
                    ->label('Image')
                    ->square(),
                Tables\Columns\TextColumn::make('title'),
                IconColumn::make('is_active')->label('Published')
                    ->options([
                        'heroicon-o-x-circle' => 0,
                        'heroicon-o-check-circle' => 1,
                    ])
                    ->colors([
                        'secondary' => 0,
                        'success' => 1,
                    ]),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
