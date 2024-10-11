<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderHistory extends Component
{
    public $orders;

    public function mount()
    {
        // Fetch orders for the logged-in user
        $this->orders = Order::where('customer_id', Auth::user()->customer->id)->get();
    }

    public function render()
    {
        return view('livewire.order-history') ->layout('layouts.app');;
    }
}
