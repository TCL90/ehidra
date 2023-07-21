<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\DateColumn;

class DatatableOfUsers extends LivewireDatatable
{
    public $model = User::class;

    public function columns()
    {
        return [
            Column::callback('id', function ($value) {
                return view('datatables::link', [
                    'href' => "/users/" . Str::slug($value),
                    'slot' => ucfirst($value)
                    ]);
            })
                ->label('ID'),

            Column::name('name')
                ->label('Nombre')
                ->sortBy('name')
                ->defaultSort('asc')
                ->searchable(),

            Column::name('email')
                ->label('Correo Electrónico')
                ->searchable(),

            DateColumn::name('created_at')
                ->label('Fecha de Creación')
                ->sortable(),

            DateColumn::name('email_verified_at')
                ->label('Verificado el')
                ->sortable(),
        ];
    }
}