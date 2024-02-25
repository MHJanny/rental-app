<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CheckoutForm extends Component
{
    #[Validate] 
    public $firstName = '';
 
    public $lastName = '';
 
    public function rules()
    {
        return [
            'first_name' => 'required|min:10',
            'last_name' => 'required|min:10',
        ];
    }
    public function save()
    {
        $validated = $this->validate();
 
        Booking::create($validated);
 
        return redirect()->to('/posts');
    }

    public function render()
    {
        return view('livewire.checkout-form');
    }
}
