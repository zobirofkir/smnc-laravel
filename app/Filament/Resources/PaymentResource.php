<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Filament\Resources\PaymentResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static ?int $navigationSort = 20;

    protected static ?string $navigationGroup = 'Finance';

    protected static ?string $modelLabel = 'Paiements';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('conferenceInscription.first_name')->label('Prénom'),
                Tables\Columns\TextColumn::make('conferenceInscription.last_name')->label('Nom'),
                Tables\Columns\TextColumn::make('conferenceInscription.status')->label('statut'),
                Tables\Columns\TextColumn::make('total')->money('MAD')->label('Total')->badge(),
                Tables\Columns\TextColumn::make('info')->label('Info')->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
                Action::make('reçu de paiement')
                    ->url(fn (Payment $record): string => asset('payments') . '/' . $record->bank_transfer)
                    ->openUrlInNewTab()
            ])
            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
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
            'index' => Pages\ListPayments::route('/'),
//            'create' => Pages\CreatePayment::route('/create'),
//            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
