<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentOption extends Component
{
    public function render()
    {
        return view('livewire.payment-option');
    }
    public function save()
    {
        dd('hello');
    }
}
