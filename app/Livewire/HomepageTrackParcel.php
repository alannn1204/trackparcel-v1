<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parcel;

class HomepageTrackParcel extends Component
{
    public string $trackingNumber = '';
    public ?Parcel $parcel = null;
    public bool $searched = false;

    public function search()
    {
        $this->searched = true;

        $this->parcel = Parcel::where('tracking_no', $this->trackingNumber)
            ->first();
    }

    public function render()
    {
        return view('livewire.homepage-track-parcel')
            ->layout('layouts.guest');
    }
}
