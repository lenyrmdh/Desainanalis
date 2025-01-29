<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SchedulesResource\Pages;
use App\Filament\Admin\Resources\SchedulesResource\RelationManagers;
use App\Models\Schedules;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SchedulesResource extends Resource
{
    protected static ?string $model = Schedules::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('athlete_id')
                ->label('Atlet')
                ->relationship('athlete', 'name')
                ->required(),
            Forms\Components\Select::make('coach_id')
                ->label('Pelatih')
                ->relationship('coach', 'name')
                ->required(),
            Forms\Components\DateTimePicker::make('session_date')
                ->label('Tanggal Sesi Latihan')
                ->required(),
            Forms\Components\TextInput::make('facility')
                ->label('Fasilitas')
                ->required(),
            Forms\Components\Select::make('training_type')
                ->label('Jenis Latihan')
                ->options([
                        'routine' => 'Latihan Rutin',
                        'competition_preparation' => 'Persiapan Kompetisi',
                        'recovery' => 'Pemulihan',
                ])
                ->required(),
            Forms\Components\TextInput::make('match_duration')
                ->label('Durasi Latihan (menit)')
                ->required(),
            Forms\Components\TextInput::make('break_time')
                ->label('Waktu Istirahat (menit)')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('athlete.name')
                ->label('Nama Atlet')
                ->sortable(),
            Tables\Columns\TextColumn::make('coach.name')
                ->label('Nama Pelatih')
                ->sortable(),
            Tables\Columns\TextColumn::make('session_date')
                ->label('Tanggal Sesi Latihan')
                ->dateTime(),
            Tables\Columns\TextColumn::make('facility')
                ->label('Fasilitas'),
            Tables\Columns\TextColumn::make('training_type')
                ->label('Jenis Latihan'),
            Tables\Columns\TextColumn::make('match_duration')
                ->label('Durasi Latihan'),
            Tables\Columns\TextColumn::make('break_time')
                ->label('Waktu Istirahat'),  
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedules::route('/create'),
            'edit' => Pages\EditSchedules::route('/{record}/edit'),
        ];
    }
}
