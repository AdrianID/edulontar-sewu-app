<?php

namespace App\Livewire;

use Livewire\Component;

class TrixEditor extends Component
{
    public $value;
    public $trixId;
    const EVENT_VALUE_UPDATED = 'trix_value_updated';

    public function mount($value = ''){
        $this->value = $value;
        $this->trixId = 'trix-' . uniqid();
    }
    public function updatedValue($value){
        $this->dispatch(self::EVENT_VALUE_UPDATED, $value);
    }

    public function render()
    {
        return view('livewire.trix-editor');
    }
}
