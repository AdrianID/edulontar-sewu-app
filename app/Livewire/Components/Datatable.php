<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class Datatable extends DataTableComponent
{
    public string $modelClass;
    public array $columnsConfig;
    public array $whereConditions = [];


    public function mount(string $modelClass, array $columnsConfig, array $whereConditions = [])
    {
        $this->modelClass = $modelClass;
        $this->columnsConfig = $columnsConfig;
        $this->whereConditions = $whereConditions;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDisabled();
        $this->setPaginationDisabled();
        $this->setColumnSelectDisabled();
        $this->setThAttributes(function(Column $column) {    
        return ['class' => 'px-6 py-3 text-left text-xs whitespace-nowrap uppercase tracking-wider font-bold text-gray-700'];
        });
    }
    public function builder(): Builder
    {
        $query = $this->modelClass::query();

        foreach ($this->whereConditions as $condition) {
            $query->where($condition['column'], $condition['operator'], $condition['value']);
        }
        return $query;
    }

    public function columns(): array
    {
        return array_merge(
            array_map(function ($col) {
                if ($col['type'] == 'image') {
                    return Column::make($col['label'], $col['field'])
                        ->format(fn($value, $row) => "<img src='" . asset('storage/'.$row->{$col['field']}) . "' class='w-50 h-20 rounded' alt='Image' />")
                        ->html();
                }
                return Column::make($col['label'], $col['field'])->sortable();
            }, $this->columnsConfig),
            [
                ButtonGroupColumn::make('Actions')
                    ->attributes(fn() => ['class' => 'space-x-2'])
                    ->buttons([
                        LinkColumn::make('View')
                            ->title(fn() => '')
                            ->location(fn($row) => route('homePage', $row))
                            ->attributes(fn() => ['class' => 'text-yellow-500 fa-solid fa-edit']),
                        LinkColumn::make('Delete')
                            ->title(fn() => '')
                            ->location(fn($row) => route('aboutPage', $row))
                            ->attributes(fn() => ['class' => 'text-blue-500 fa-solid fa-trash', 'style' => 'color:red']),
                    ]),
            ]
        );
    }
}
