<?php

namespace App\Livewire\Admin\Carousel;

use App\Models\CmsContents;
use App\Models\Posts;
use App\Utils\Toast;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class CarouselIndex extends DataTableComponent
{

    protected $model = CmsContents::class;

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
            Column::make('Image', 'image')
                ->format(fn($value, $row) => "<img src='" . asset('storage/'.$value) . "' class='w-50 h-20 rounded' alt='Image' />")
                ->html(),
            Column::make('Title', 'title')
                ->sortable(),
            Column::make('Published at', 'created_at')
                ->sortable(),
            ButtonGroupColumn::make('Actions')
            ->attributes(function($row) {
                return [
                    'class' => 'space-x-2',
                ];
            })
            ->buttons([
                    LinkColumn::make('Delete')
                    ->title(fn($row) => '')
                    ->location(fn($row) => '#')
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
        $produk = CmsContents::find($id);

        if ($produk) {
            $produk->delete();
            Toast::success($this, 'Data berhasil dihapus!');
        } else {
            Toast::warning($this, 'Data gagal dihapus!');
        }
    }
}