<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AwardResource\Pages;
use App\Filament\Resources\AwardResource\RelationManagers;
use App\Models\Award;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\BadgeColumn;

class AwardResource extends Resource
{
    protected static ?string $model = Award::class;

    protected static ?int $navigationSort = 8;
    protected static ?string $navigationGroup = 'General';
    protected static ?string $navigationIcon = 'heroicon-o-gift';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                Forms\Components\TextInput::make('subtitle'),
                FileUpload::make('cover_image')->label('Image')->directory('awards'),
                Forms\Components\Textarea::make('excerpt')
                    ->maxLength(65535),
                RichEditor::make('description'),
                Toggle::make('is_active')
                    ->label('Publish')
                    ->onColor('primary')
                    ->offColor('secondary')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')->label('Image'),
                TextColumn::make('title')->searchable(),
                BadgeColumn::make('is_active')->label('Status')
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAwards::route('/'),
        ];
    }
}
