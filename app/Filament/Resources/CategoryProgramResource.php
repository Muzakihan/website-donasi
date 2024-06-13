<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryProgramResource\Pages;
use App\Filament\Resources\CategoryProgramResource\RelationManagers;
use App\Models\CategoryProgram;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryProgramResource extends Resource
{
    protected static ?string $model = CategoryProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListCategoryPrograms::route('/'),
            'create' => Pages\CreateCategoryProgram::route('/create'),
            'edit' => Pages\EditCategoryProgram::route('/{record}/edit'),
        ];
    }
}
