<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Posts;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class PostIndex extends DataTableComponent
{

    protected $model = Posts::class;

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
            Column::make('Header Image', 'header_content_image')
                ->format(fn($value, $row) => "<img src='" . asset('storage/'.$value) . "' class='w-50 h-20 rounded' alt='Image' />")
                ->html(),
            Column::make('Slug', 'slug')
                ->format(fn($value, $row) => "<a href='/news/".$value.  "' class='underline text-blue'>".$value."</a>")
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
                LinkColumn::make('Edit')
                    ->title(fn($row) => '')
                    ->location(fn($row) => route('post.edit', ['slug' => $row->slug]))
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
        $produk = Posts::find($id);

        if ($produk) {
            $produk->delete();
            // $this->dispatchBrowserEvent('notification', ['message' => 'Produk berhasil dihapus!']);
        } else {
            // $this->dispatchBrowserEvent('notification', ['message' => 'Produk tidak ditemukan!', 'type' => 'error']);
        }
    }
    // public function render()
    // {
    //     return view('livewire.admin.posts.post-index');
    // }
}
