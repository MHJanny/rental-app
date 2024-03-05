<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class CheckoutForm extends Component
{
    #[Rule(['required','string'])] 
    public $firstName;
    #[Rule(['required','min:3'])] 
    public $lastName;
    #[Rule(['nullable','string'])] 
    public $company;
    #[Rule(['required','string','min:3'])] 
    public $address1;
    #[Rule(['nullable','string','min:10'])]
    public $address2;
    #[Rule(['required','string', 'min:3'])]
    public $city;
    #[Rule(['required','string', 'min:3'])]
    public $country;
    #[Rule(['required','string', 'min:3'])]
    public $zip;
    #[Rule(['required','email', 'min:3'])]
    public $email;
    #[Rule(['required','min:3', 'max:20'])]
    public $phone;
    #[Rule(['nullable','string'])]
    public $note;
    public function render()
    {
        return view('livewire.checkout-form');
    }
}
