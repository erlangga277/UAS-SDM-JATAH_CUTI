<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;
    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nip')
                ->label('NIP')
                ->required()
                ->maxLength(20),

            Forms\Components\Select::make('gender')
                ->label('Jenis Kelamin')
                ->required()
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan',
                ]),

            Forms\Components\TextInput::make('tmp_lahir')
                ->label('Tempat Lahir')
                ->required()
                ->maxLength(45),

            Forms\Components\DatePicker::make('tgl_lahir')
                ->label('Tanggal Lahir')
                ->required(),

            Forms\Components\TextInput::make('telepon')
                ->label('Telepon')
                ->required()
                ->maxLength(20),

            Forms\Components\TextInput::make('alamat')
                ->label('Alamat')
                ->required()
                ->maxLength(100),

            Forms\Components\Select::make('manager_id')
                ->label('Manager')
                ->relationship('manager', 'manager')
                ->required(),

            Forms\Components\FileUpload::make('foto')
                ->label('Foto')
                ->image()
                ->disk('public')
                ->directory('Foto-Pegawai')
                ->imagePreviewHeight('150')
                ->previewable()
                ->downloadable()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nip')->label('NIP')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('gender')->label('Gender'),
                Tables\Columns\TextColumn::make('tmp_lahir')->label('Tempat Lahir'),
                Tables\Columns\TextColumn::make('tgl_lahir')->label('Tanggal Lahir')->date(),
                Tables\Columns\TextColumn::make('telepon')->label('Telepon'),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat'),
                Tables\Columns\TextColumn::make('manager.manager')->label('Manager'),
                Tables\Columns\ImageColumn::make('foto')->label('Foto')->disk('public')->circular(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn () => in_array(Auth::user()->role, ['admin', 'HRD', 'manager'])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(fn () => Auth::user()->role === 'admin'),
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }

    // =====================
    // Role-based Permission
    // =====================

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
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager']);
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'HRD', 'manager']);
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
