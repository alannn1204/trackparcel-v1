<?php

namespace App\Filament\Widgets;

use App\Models\Parcel;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Filament\Tables\Columns\TextColumn;

class LatestParcels extends TableWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Parcel::query()->latest())
            ->columns([
                TextColumn::make('tracking_no')
                    ->label('Tracking No')
                    ->searchable(),

                TextColumn::make('customer_name')
                    ->label('Customer'),

                TextColumn::make('storage_no')
                    ->label('No. Rack'),

                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'info' => 'pending',
                        'warning' => 'ready',
                        'success' => 'delivered',
                    ]),
            ]);
    }
}
