<?php

namespace App\Livewire\Cuppon;

use App\Models\Cuppon;
use Livewire\Component;

class CupponTable extends Component
{
    public function render()
    {
        $cuppons = Cuppon::latest()->paginate(3);
        return view('livewire.cuppon.cuppon-table', ['cuppons' => $cuppons]);
    }
}
