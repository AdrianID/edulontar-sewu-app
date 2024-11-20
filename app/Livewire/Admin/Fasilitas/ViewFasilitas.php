<?php

// namespace App\Livewire;
namespace App\Livewire\Admin\Fasilitas;

use App\Models\Fasilitas;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ViewFasilitas extends DataTableComponent
{
    protected $model = Fasilitas::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Nama Fasilitas', 'nama_fasilitas')
                ->sortable(),
            Column::make('Created at', 'created_at')
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
                    ->location(fn($row) => route('edit.fasilitas', ['id' => $row->id]))
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
        $produk = Fasilitas::find($id);

        if ($produk) {
            $produk->delete();
            // $this->dispatchBrowserEvent('notification', ['message' => 'Produk berhasil dihapus!']);
        } else {
            // $this->dispatchBrowserEvent('notification', ['message' => 'Produk tidak ditemukan!', 'type' => 'error']);
        }
    }

}
