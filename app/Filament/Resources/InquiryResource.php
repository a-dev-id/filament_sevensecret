<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InquiryResource\Pages;
use App\Filament\Resources\InquiryResource\RelationManagers;
use App\Models\Inquiry;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InquiryResource extends Resource
{
    protected static ?string $model = Inquiry::class;

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationGroup = 'Booking';
    protected static ?string $navigationIcon = 'heroicon-o-bell';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('package_title')
                    ->maxLength(191),
                Forms\Components\Textarea::make('package_excerpt')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('package_price')
                    ->maxLength(191),
                Forms\Components\TextInput::make('package_per')
                    ->maxLength(191),
                Forms\Components\TextInput::make('full_name')
                    ->maxLength(191),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(191),
                Forms\Components\TextInput::make('country')
                    ->maxLength(191),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(191),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\Textarea::make('message')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country'),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('package_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Booking Date')
                    ->sortable()
                    ->date(),
                Tables\Columns\TextColumn::make('message'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListInquiries::route('/'),
            // 'create' => Pages\CreateInquiry::route('/create'),
            'edit' => Pages\EditInquiry::route('/{record}/edit'),
        ];
    }
}
