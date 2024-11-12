<?php

namespace App\Livewire;

use App\Models\Posts;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UserTable extends DataTableComponent
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
            Column::make('Title', 'title')
                ->sortable(),
            Column::make('Slug', 'slug')
                ->sortable(),
            Column::make('Content', 'content')
                ->sortable(),
            Column::make('Created At', 'created_at')
                ->sortable(),
            Column::make('Updated At', 'updated_at')
                ->sortable(),
            ButtonGroupColumn::make('Actions')
            ->attributes(function($row) {
                return [
                    'class' => 'space-x-2',
                ];
            })
            ->buttons([
                LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                    ->title(fn($row) => '')
                    ->location(fn($row) => route('homePage', $row))
                    ->attributes(function($row) {
                        return [
                            'class' => 'text-yellow-500 fa-solid fa-edit',
                        ];
                    }),
                LinkColumn::make('Delete')
                    ->title(fn($row) => '')
                    ->location(fn($row) => route('aboutPage', $row))
                    ->attributes(function($row) {
                        return [
                            'target' => '_blank',
                            'class' => 'text-blue-500 fa-solid fa-trash ',
                            'style' => 'color:red'
                        ];
                    }),
            ]),                                    
        ];
    }

}
