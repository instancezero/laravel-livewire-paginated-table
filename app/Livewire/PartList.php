<?php

namespace App\Livewire;

use App\Models\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartList extends Component
{
    use WithPagination;

    public function populate(int $count)
    {
        Part::factory($count)->create();
        return redirect()->to('/');
    }

    public function purge()
    {
        Part::truncate();
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.parts.list', ['parts' => Part::orderBy('partNumber')->paginate(10)]);
    }

}
