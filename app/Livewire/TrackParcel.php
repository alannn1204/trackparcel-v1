<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Parcel;

class TrackParcel extends Component
{
    public $trackingNumber;
    public $parcel;

    public function track()
    {
        $this->parcel = Parcel::where('tracking_no', $this->trackingNumber)->first();
    }

    public function render()
    {
        return view('livewire.track-parcel');
    }
}
