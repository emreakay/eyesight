<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HttpEyesightResource\Pages;
use App\Filament\Resources\HttpEyesightResource\RelationManagers;
use App\Models\HttpEyesight;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HttpEyesightResource extends Resource
{
    protected static ?string $model = HttpEyesight::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->helperText('Name')
                    ->hint('[Forgotten your password?](forgotten-password)')
                    ->hintIcon('heroicon-s-translate')
                    ->placeholder('Unique Name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->url()
                    ->maxLength(255),
                Forms\Components\Toggle::make('ssl')
                    ->required()
                    ->default(true),
                Forms\Components\Toggle::make('domain_expire')
                    ->required()
                    ->default(true),
                Forms\Components\TextInput::make('timeout')
                    ->numeric()
                    ->minValue(10)
                    ->maxValue(300)
                    ->default(30)
                    ->required(),
                Forms\Components\TextInput::make('lh_performance')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(70),
                Forms\Components\TextInput::make('lh_accessibility')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(70),
                Forms\Components\TextInput::make('lh_best_practices')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(70),
                Forms\Components\TextInput::make('lh_seo')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(70),
                Forms\Components\TextInput::make('lh_pwa')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(0),
                Forms\Components\TextInput::make('interval_in_sec')
                    ->numeric()
                    ->minValue(30)
                    ->default(60)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('url'),
                Tables\Columns\IconColumn::make('ssl')
                    ->boolean(),
                Tables\Columns\IconColumn::make('domain_expire')
                    ->boolean(),
                Tables\Columns\TextColumn::make('timeout'),
                Tables\Columns\TextColumn::make('lh_performance'),
                Tables\Columns\TextColumn::make('lh_accessibility'),
                Tables\Columns\TextColumn::make('lh_best_practices'),
                Tables\Columns\TextColumn::make('lh_seo'),
                Tables\Columns\TextColumn::make('lh_pwa'),
                Tables\Columns\TextColumn::make('interval_in_sec'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHttpEyesights::route('/'),
            'create' => Pages\CreateHttpEyesight::route('/create'),
            'edit' => Pages\EditHttpEyesight::route('/{record}/edit'),
        ];
    }
}
