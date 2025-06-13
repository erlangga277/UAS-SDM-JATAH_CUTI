<?php

namespace App\Filament\Resources;

use App\Models\Pegawai;
use App\Filament\Resources\PengajuanCutiResource\Pages;
use App\Filament\Resources\PengajuanCutiResource\RelationManagers;
use App\Models\PengajuanCuti;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengajuanCutiResource extends Resource
{
    protected static ?string $model = PengajuanCuti::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal_awal')
                ->label('Tanggal Awal Cuti')
                ->required(),

            Forms\Components\DatePicker::make('tanggal_akhir')
                ->label('Tanggal Akhir Cuti')
                ->required(),

            Forms\Components\TextInput::make('jumlah')
                ->label('Jumlah Hari')
                ->required()
                ->numeric()
                ->minValue(1),

            Forms\Components\Textarea::make('ket')
                ->label('Alasan Cuti')
                ->required()
                ->maxLength(100),

            Forms\Components\Select::make('status')
                ->required()
                ->options([
                    'diproses' => 'Diproses',
                    'disetujui' => 'Disetujui',
                    'ditolak' => 'Ditolak',
                ])
                ->default('diproses'),

            Forms\Components\Select::make('nip')
                ->label('Pegawai')
                ->options(Pegawai::pluck('nip', 'nip'))
                ->searchable()
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nip')->label('NIP')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_awal')->date()->label('tgl_awal'),
                Tables\Columns\TextColumn::make('tanggal_akhir')->date()->label('tgl_akhir'),
                Tables\Columns\TextColumn::make('jumlah')->label('Jumlah')->sortable(),
                Tables\Columns\TextColumn::make('status')->badge(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Dibuat'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPengajuanCutis::route('/'),
            'create' => Pages\CreatePengajuanCuti::route('/create'),
            'edit' => Pages\EditPengajuanCuti::route('/{record}/edit'),
        ];
    }
}
