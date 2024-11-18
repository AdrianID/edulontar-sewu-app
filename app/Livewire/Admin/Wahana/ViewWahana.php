<?php

// namespace App\Livewire;
namespace App\Livewire\Admin\Wahana;

use App\Models\Wahana;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ViewWahana extends DataTableComponent
{
    protected $model = Wahana::class;

    public function configure(): void
    {
        // $this->setPrimaryKey('id');
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Wahana', 'judul_wahana')
                ->sortable(),
            Column::make('Deskripsi', 'deskripsi_wahana')
                ->sortable(),
            ButtonGroupColumn::make('Actions')
            ->attributes(function($row) {
                return [
                    'class' => 'space-x-2',
                ];
            })
            ->buttons([
                LinkColumn::make('Edit')
                    ->title(fn($row) => '')
                    ->location(fn($row) => route('edit.wahana', ['id' => $row->id]))
                    ->attributes(function($row) {
                        return [
                            'class' => 'text-yellow-500 fa-solid fa-edit',
                        ];
                    }),
                    LinkColumn::make('Delete')
                    ->title(fn($row) => '')
                    ->location(fn($row) => '#') // Tidak gunakan route langsung
                    ->attributes(function ($row) {
                        return [
                            'class' => 'text-blue-500 fa-solid fa-trash cursor-pointer',
                            'style' => 'color:red',
                            'wire:click' => "delete({$row->id})", // Panggil metode delete di Livewire
                        ];
                    }),
            ]),                                    
        ];
    }

    public function delete($id)
    {
        $produk = Wahana::find($id);

        if ($produk) {
            $produk->delete();
            // $this->dispatchBrowserEvent('notification', ['message' => 'Produk berhasil dihapus!']);
        } else {
            // $this->dispatchBrowserEvent('notification', ['message' => 'Produk tidak ditemukan!', 'type' => 'error']);
        }
    }

}
