<?php

namespace App\Livewire\Forms;

use App\Livewire\Checkout;
use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class CheckoutForm extends Form
{
    public Checkout $checkout;
    
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
}
