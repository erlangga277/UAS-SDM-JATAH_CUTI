<?php

namespace App\Filament\Resources;

use App\Models\PengajuanCuti;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\PengajuanCutiResource\Pages;

class PengajuanCutiResource extends Resource
{
    protected static ?string $model = PengajuanCuti::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\DatePicker::make('tanggal_awal')
                ->label('Tanggal Awal Cuti')
                ->required(),

            Forms\Components\DatePicker::make('tanggal_akhir')
                ->label('Tanggal Akhir Cuti')
                ->required(),

            Forms\Components\TextInput::make('jumlah')
                ->label('Jumlah Hari')
                ->numeric()
                ->minValue(1)
                ->required(),

            Forms\Components\Textarea::make('ket')
                ->label('Alasan Cuti')
                ->maxLength(100)
                ->required(),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'diproses' => 'Diproses',
                    'disetujui' => 'Disetujui',
                    'ditolak' => 'Ditolak',
                ])
                ->default('diproses')
                ->required(),

            Forms\Components\Select::make('nip')
                ->label('Pegawai (NIP)')
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
                Tables\Columns\TextColumn::make('tanggal_awal')->label('Tanggal Awal')->date(),
                Tables\Columns\TextColumn::make('tanggal_akhir')->label('Tanggal Akhir')->date(),
                Tables\Columns\TextColumn::make('jumlah')->label('Jumlah Hari')->sortable(),
                Tables\Columns\TextColumn::make('ket')->label('Alasan'),
                Tables\Columns\TextColumn::make('status')->label('Status')->badge(),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengajuanCutis::route('/'),
            'create' => Pages\CreatePengajuanCuti::route('/create'),
            'edit' => Pages\EditPengajuanCuti::route('/{record}/edit'),
        ];
    }

    // Role-based Permissions
    public static function canViewAny(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager', 'pegawai']);
    }

    public static function canView(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager', 'pegawai']);
    }

    public static function canCreate(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager', 'pegawai']);
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager', 'pegawai']);
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'admin';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager']);
    }
}
