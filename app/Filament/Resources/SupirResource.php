<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupirResource\Pages;
use App\Models\Supir;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class SupirResource extends Resource
{
    protected static ?string $model = Supir::class;
    protected static ?string $navigationIcon = 'heroicon-s-user';
    protected static ?string $navigationGroup = 'Manajemen Supir';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('nama')->required(),
            TextInput::make('no_ktp')->required()->unique(ignoreRecord: true),
            TextInput::make('no_sim')->required()->unique(ignoreRecord: true),
            TextInput::make('alamat')->required(),
            TextInput::make('telepon')->required()->tel(),
            Select::make('status')
                ->options([
                    'aktif' => 'Aktif',
                    'non-aktif' => 'Non-Aktif',
                ])
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('nama')->searchable()->sortable(),
            TextColumn::make('no_ktp'),
            TextColumn::make('no_sim'),
            TextColumn::make('telepon'),
            TextColumn::make('status')->badge(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSupirs::route('/'),
            'create' => Pages\CreateSupir::route('/create'),
            'edit' => Pages\EditSupir::route('/{record}/edit'),
        ];
    }
}
