<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use App\Models\CategoryArticle;
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

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Article';

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
                        Select::make('category_article_id')
                            ->label('Category Artikel')
                            ->options(CategoryArticle::all()->pluck('name', 'id'))
                            ->required(),
                        RichEditor::make('content')
                            ->fileAttachmentsDirectory('photos')
                            ->required(),
                        FileUpload::make('photos')
                            ->directory('article')
                            ->image()
                            ->openable()
                            ->imageEditor()
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('categoryarticle.name')
                    ->label("Category Donate")
                    ->sortable()
                    ->searchable(),
                TextColumn::make('content')->label("Content")
                    ->html()
                    ->getStateUsing(function ($record) {
                        $content = $record->content;
                        if (preg_match('/<img[^>]+src="([^">]+)"/', $content, $matches)) {
                            $imageUrl = $matches[1];
                            $shortContent = strip_tags(substr($content, 0, 100)) . '...';
                            return "<div><img src='{$imageUrl}' style='max-width: 100px; max-height: 100px;'><div>{$shortContent}</div></div>";
                        }
                        return strip_tags(substr($content, 0, 100)) . '...';
                    })
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
