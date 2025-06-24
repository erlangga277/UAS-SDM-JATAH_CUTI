<?php

namespace App\Filament\Resources;

use App\Models\Pegawai;
use App\Filament\Resources\JatahCutiResource\Pages;
use App\Models\JatahCuti;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class JatahCutiResource extends Resource
{
    protected static ?string $model = JatahCuti::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric(),

                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),

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
                Tables\Columns\TextColumn::make('tahun')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable(),
                Tables\Columns\TextColumn::make('nip')->label('NIP')->sortable()->searchable(),
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

    public static function canViewAny(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD']);
    }

    public static function canView(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD']);
    }

    public static function canCreate(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD']);
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD']);
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'admin';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD']);
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
            'index' => Pages\ListJatahCutis::route('/'),
            'create' => Pages\CreateJatahCuti::route('/create'),
            'edit' => Pages\EditJatahCuti::route('/{record}/edit'),
        ];
    }
}
