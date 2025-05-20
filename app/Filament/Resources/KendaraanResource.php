<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Models\Kendaraan;
use App\Models\Supir;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;
    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Manajemen Kendaraan';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('supir_id')
                ->label('Supir')
                ->relationship('supir', 'nama')
                ->searchable()
                ->required(),

            TextInput::make('plat_nomor')->required()->unique(ignoreRecord: true),
            TextInput::make('jenis')->required(),
            TextInput::make('merk')->required(),
            TextInput::make('tahun')->numeric()->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('plat_nomor'),
            TextColumn::make('jenis'),
            TextColumn::make('merk'),
            TextColumn::make('tahun'),
            TextColumn::make('supir.nama')->label('Nama Supir'),
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}
