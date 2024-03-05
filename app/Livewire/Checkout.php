<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Checkout extends Component
{
    public $uuid = '';

    public $property = '';

    #[Rule(['required', 'integer'])]
    public $propertyId = null;

    public $userId = null;

    public $title = '';

    public $price = null;

    public $totalPrice = null;

    #[Rule(['required', 'string'])]
    public $paymentMethod = '';

    public $quantity = 1;

    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $this->property = Property::with('media')->whereUuid($uuid)->firstOrFail();
        $this->propertyId = $this->property->id;
        $this->userId = auth()->user()->id;
        $this->title = $this->property->title;
        $this->price = $this->property->price;
        $this->totalPrice = $this->price * $this->quantity;
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
