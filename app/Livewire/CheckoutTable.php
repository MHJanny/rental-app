<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;

use App\Models\Property;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class CheckoutTable extends Component
{
    public $property;
    #[Rule(['required','integer'])] 
    public $propertyId;
    public $userId;
    public $title;
    public $price;
    public $totalPrice;
    #[Rule(['required','string'])]
    public $paymentMethod;
    public $quantity = 1;
    #[Rule(['nullable','string'])] 
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


    public function save()
    {
        $this->validate();
        $billingAddress = [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'company' => $this->company,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'country' => $this->country,
            'zip' => $this->zip,
            'email' => $this->email,
            'phone' => $this->phone,
            'note' => $this->note,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'payment_method' => $this->paymentMethod,
        ];
       
        $booking = Booking::create([
            'property_id' => $this->propertyId,
            'user_id' => $this->userId,
            'billing_address' => json_encode($billingAddress),
            'amount'    => $this->price * $this->quantity,
        ]);
        $this->reset(
            'firstName','lastName','company',
            'address1','address2','city','country',
            'zip','email','phone','note','paymentMethod'
        );
        redirect()->route('payment')->with(['booking' => $booking]);
    }
    public function mount($uuid)
    {
        $this->property = Property::with('media')->whereUuid($uuid)->firstOrFail();
        $this->propertyId = $this->property->id;
        $this->userId = auth()->user()->id;
        $this->title = $this->property->title;
        $this->price = $this->property->price;
        $this->totalPrice = $this->price * $this->quantity;
    }
    public function incrementQuantity()
    {
        $this->quantity = $this->quantity + 1;
    }
    public function decrementQuantity()
    {
        if($this->quantity > 1)
        {
            $this->quantity = $this->quantity - 1;
        }
    }
    public function quantity()
    {
        if($this->quantity === 0)
        {
            return $this->quantity = 1;
        }
        return $this->quantity;
    }
    public function render()
    {
        return view('livewire.checkout-table',['property' => $this->property]);
    }
}
