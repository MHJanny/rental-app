<?php

namespace App\Livewire\Coupon;

use App\Models\Coupon;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CouponCreate extends Component
{
    #[Rule('required', message: 'Coupon Title is required')]
    public string $title = '';

    #[Rule('required', message: 'Coupon Code is required')]
    #[Rule('max:5')]
    public string $code = '';

    #[Rule('required', message: 'Coupon Value is required')]
    #[Rule('numeric', as: 'Coupon Value must be a number')]
    public $value;

    #[Rule('required', message: 'Coupon Type is required')]
    public string $type = '';

    public $propertyId = null;

    public function save()
    {
        $this->validate();
        $coupon = Coupon::create([
            'title' => $this->title,
            'code' => $this->code,
            'amount' => $this->value,
            'type' => $this->type,
            'property_id' => $this->propertyId,
        ]);
        session()->flash('coupon-added', 'Coupon has been added successfully!');

        return redirect()->route('coupon.index');
    }

    public function render()
    {
        return view('livewire.coupon.coupon-create');
    }
}
