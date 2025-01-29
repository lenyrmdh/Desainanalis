<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AthleteResource\Pages;
use App\Filament\Admin\Resources\AthleteResource\RelationManagers;
use App\Models\Athlete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AthleteResource extends Resource
{
    protected static ?string $model = Athlete::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                     ->label('Nama')
                     ->required(),
                Forms\Components\TextInput::make('age')
                     ->label('Usia')
                     ->required(),
                Forms\Components\TextInput::make('gender')
                    ->label('Jenis Kelamin')
                    ->required(),
                Forms\Components\TextInput::make('skill_level')
                    ->label('Tingkat Keterampilan')
                    ->required(),
                Forms\Components\TextInput::make('training_history')
                    ->label('Riwayat Pelatihan')
                    ->required(),
                Forms\Components\TextInput::make('competition_evaluation')
                    ->label('Hasil Evaluasi Kompetisi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Nama')
                ->sortable(),
            Tables\Columns\TextColumn::make('age')
                ->label('Usia'),
            Tables\Columns\TextColumn::make('gender')
                ->label('Jenis Kelamin'),
            Tables\Columns\TextColumn::make('skill_level')
                ->label('Tingkat Keterampilan'),
            Tables\Columns\TextColumn::make('training_history')
                ->label('Riwayat Pelatihan'),
            Tables\Columns\TextColumn::make('competition_evaluation')
                ->label('Hasil Evaluasi Kompetisi'),
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
            'index' => Pages\ListAthletes::route('/'),
            'create' => Pages\CreateAthlete::route('/create'),
            'edit' => Pages\EditAthlete::route('/{record}/edit'),
        ];
    }
}
