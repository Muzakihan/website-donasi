<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramResource\Pages;
use App\Filament\Resources\ProgramResource\RelationManagers;
use App\Models\CategoryProgram;
use App\Models\Program;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                    'sm' => 3,
                    'xl' => 1,
                    '2xl' => 1,
                ])
                    ->schema([
                        TextInput::make('title')->required(),
                        Select::make('category_program_id')
                            ->label('Category Program')
                            ->options(CategoryProgram::all()->pluck('name', 'id'))
                            ->required(),
                        RichEditor::make('description')
                            ->disableToolbarButtons(['attachFiles'])
                            ->required(),
                        RichEditor::make('program_objective')
                            ->disableToolbarButtons(['attachFiles'])
                            ->required(),
                        FileUpload::make('photos')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            ->directory('program')
                            ->preserveFilenames()
                        // ->deleteUploadedFileUsing(function ($file) {
                        //     Storage::delete($file);
                        // }),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('categoryprogram.name')
                    ->label("Category Program")
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')->label("Description")
                    ->html()
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('program_objective')->label("Program Objective")
                    ->html()
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('photos')
                    ->checkFileExistence(false)
                    ->width(100)
                    ->height(100)
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
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}
