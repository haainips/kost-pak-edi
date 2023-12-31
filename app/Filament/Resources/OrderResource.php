<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required(),
                Select::make('status')
                    ->options([
                        'Unpaid' => 'Unpaid',
                        'Paid' => 'Paid',
                    ])
                    ->native(false),
                DatePicker::make('mulai_sewa'),
                TextInput::make('masa_sewa')
                    ->required(),
                DatePicker::make('akhir_sewa')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('No'),
                TextColumn::make('kode_order')
                    ->label('Kode Pemesanan'),
                TextColumn::make('user_id')
                    ->label('ID User'),
                TextColumn::make('name')
                    ->label('Nama'),
                TextColumn::make('nohp')
                    ->label('No Hp'),
                TextColumn::make('mulai_sewa')
                    ->label('Tanggal Masuk Kost')
                    ->date(),
                TextColumn::make('akhir_sewa')
                    ->label('Tanggal Keluar')
                    ->date(),
                TextColumn::make('masa_sewa')
                    ->label('Masa Sewa'),
                TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->money('IDR')
                    ->numeric(
                        decimalPlaces: 0,
                        thousandsSeparator: ','
                    ),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Unpaid' => 'danger',
                        'Paid' => 'success',
                    }),
                    TextColumn::make('created_at')
                        ->label('Pesanan Dibuat'),
            ])
            ->filters([
                SelectFilter::make('status')
                ->options([
                    'Unpaid' => 'Unpaid',
                    'Paid' => 'Paid',
                ])
                ->label('Status Pembayaran')
                ->searchable()
                ->preload()
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),

                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }    
}
