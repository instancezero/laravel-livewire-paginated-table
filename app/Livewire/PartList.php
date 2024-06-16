<?php

namespace App\Livewire;

use App\Models\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.parts.list', ['contacts' => Part::paginate(10)]);
    }
}
