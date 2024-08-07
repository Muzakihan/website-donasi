<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonateResource\Pages;
use App\Models\CategoryDonate;
use App\Models\Donate;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

use function Laravel\Prompts\text;

class DonateResource extends Resource
{
    protected static ?string $model = Donate::class;

    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document';

    protected static ?string $navigationGroup = 'Donate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                    'sm' => 1,
                    'xl' => 1,
                    '2xl' => 1,
                ])
                    ->schema([
                        TextInput::make('name')->required(),
                        Select::make('category_donate_id')
                            ->label('Category Donate')
                            ->options(CategoryDonate::all()->pluck('name', 'id'))
                            ->required(),
                        RichEditor::make('thumbnail_description')
                            ->disableToolbarButtons(['attachFiles'])
                            ->required(),
                        RichEditor::make('description')->required(),
                        TextInput::make('goal_price')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->prefix('Rp ')
                            ->numeric()
                            ->required(),
                        FileUpload::make('photos')
                            ->image()
                            ->imageEditor()
                            ->openable()
                            ->directory('donate'),
                        Hidden::make('status')
                            ->default('pending')
                    ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('categorydonate.name')
                    ->label("Category Donate")
                    ->sortable()
                    ->searchable(),
                TextColumn::make('goal_price')
                    ->label("Goal Price")
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function ($record) {
                        if ($record->goal_price !== NULL) {
                            return 'Rp ' . number_format($record->goal_price, 0, ',', '.');
                        } else {
                            return false;
                        }
                    }),
                TextColumn::make('current_price')
                    ->label("Current Price")
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function ($record) {
                        if ($record->current_price !== NULL) {
                            return 'Rp ' . number_format($record->current_price, 0, ',', '.');
                        } else {
                            return false;
                        }
                    }),
                ImageColumn::make('photos'),
                TextColumn::make('status')
                    ->label("Status")
                    ->sortable()
                    ->searchable(),

            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDonates::route('/'),
            'create' => Pages\CreateDonate::route('/create'),
            'edit' => Pages\EditDonate::route('/{record}/edit'),
        ];
    }
}
