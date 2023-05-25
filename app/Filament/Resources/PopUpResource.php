<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PopUpResource\Pages;
use App\Filament\Resources\PopUpResource\RelationManagers;
use App\Models\Blog;
use App\Models\PopUp;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PopUpResource extends Resource
{
    protected static ?string $model = PopUp::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Advance';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make('2')
                    ->schema([
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
                FileUpload::make('cover_image')
                    ->label('Image'),
                Grid::make('2')
                    ->schema([
                        Select::make('button_link')
                            ->label('Link to')
                            ->options(Blog::where('is_active', '1')->pluck('title', 'slug'))
                            ->searchable(),
                        Select::make('button_text')
                            ->label('Mode')
                            ->options([
                                'full_image' => 'Full Image',
                                'with_text' => 'With Text',
                            ]),
                    ]),
                Textarea::make('excerpt'),
                Toggle::make('is_active')
                    ->label('Publish')
                    ->inline(false)
                    ->onColor('success')
                    ->offColor('secondary')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')->label('Image')->square(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('button_text')->label('Mode'),
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
            'index' => Pages\ManagePopUps::route('/'),
        ];
    }
}
