<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Filament\Resources\TransactionResource\RelationManagers;
use App\Models\Donate;
use App\Models\Product;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Donate';

    public static function canCreate(): bool
    {
        return false;
    }

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
                        TextInput::make('username')->label('username')->required(),
                        TextInput::make('email')
                            ->email()
                            ->required(),
                        TextInput::make('phone_number')
                            ->tel()
                            ->required(),
                        Select::make('donate_id')
                            ->label('Donate')
                            ->options(Donate::all()->pluck('name', 'id'))
                            ->required(),
                        RichEditor::make('hope_for_foundation')
                            ->required(),
                        RichEditor::make('hope_for_you')
                            ->required(),
                        TextInput::make('donate_price')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->prefix('Rp ')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('username')->sortable()->searchable(),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->url(function ($record) {
                        if ($record->email === NULL) {
                            return null;
                        } else {
                            $emailLink = 'mailto:' . $record->email;
                            return $emailLink;
                        }
                    }),
                TextColumn::make('phone_number')
                    ->sortable()
                    ->searchable()
                    ->url(function ($record) {
                        if ($record->phone_number === NULL) {
                            return null;
                        } else {
                            $waLink = 'https://wa.me/' . $record->phone_number;
                            return $waLink;
                        }
                    })
                    ->html(),
                TextColumn::make('donate.name')->sortable()->searchable(),
                TextColumn::make('donate_price')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function ($record) {
                        if ($record->donate_price !== NULL) {
                            return 'Rp ' . number_format($record->donate_price, 0, ',', '.');
                        } else {
                            return false;
                        }
                    }),
                TextColumn::make('hope_for_foundation')->label("Hope For Foundation")
                    ->html()
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('hope_for_you')->label("Hope For You")
                    ->html()
                    ->wrap()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListTransactions::route('/'),
            // 'create' => Pages\CreateTransaction::route('/create'),
            // 'edit' => Pages\EditTransaction::route('/{record}/edit'),
        ];
    }
}
