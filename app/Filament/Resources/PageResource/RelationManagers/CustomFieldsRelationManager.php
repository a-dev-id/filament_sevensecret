<?php

namespace App\Filament\Resources\PageResource\RelationManagers;

use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomFieldsRelationManager extends RelationManager
{
    protected static string $relationship = 'CustomFields';

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
                        ]),

                    Section::make('Additional')
                        ->schema([
                            Grid::make(2)->schema([
                                FileUpload::make('banner_image')->label('Banner Image'),
                                FileUpload::make('cover_image')->label('Cover Image'),
                            ]),
                            Grid::make(2)->schema([
                                Forms\Components\TextInput::make('button_text')
                                    ->maxLength(191),
                                Forms\Components\TextInput::make('button_link')
                                    ->maxLength(191),
                            ]),
                            Grid::make(1)->schema([
                                Toggle::make('is_active')
                                    ->label('Publish')
                                    ->inline(false)
                                    ->onColor('success')
                                    ->offColor('secondary')
                            ]),
                        ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                ImageColumn::make('cover_image')->square(),
                Tables\Columns\TextColumn::make('title'),
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
