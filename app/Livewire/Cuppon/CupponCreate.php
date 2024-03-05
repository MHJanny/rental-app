<?php

namespace App\Livewire\Cuppon;

use App\Models\Cuppon;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Ramsey\Uuid\Type\Integer;

class CupponCreate extends Component
{
    #[Rule('required', message:'Cuppon Title is required')]
    public string $title = '';
    #[Rule('required', message:'Cuppon Code is required')]
    #[Rule('max:5')]
    public string $code = '';
    #[Rule('required', message:'Cuppon Value is required')]
    #[Rule('numeric', as:'Cuppon Value must be a number')]
    public  $value;
    #[Rule('required', message:'Cuppon Type is required')]
    public string $type = '';
    public $propertyId = null;

    public function save()
    {
       $this->validate();
       $cuppon = Cuppon::create([
           'title' => $this->title,
           'code' => $this->code,
           'amount' => $this->value,
           'type' => $this->type,
           'property_id'=> $this->propertyId
       ]);
    session()->flash('cuppon-added', 'Coupon has been added successfully!');
    return redirect()->route('cuppon.index');
    }
    public function render()
    {
        return view('livewire.cuppon.cuppon-create');
    }
}
