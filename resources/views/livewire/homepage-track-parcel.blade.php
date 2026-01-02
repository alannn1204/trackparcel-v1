<div class="w-full max-w-xl space-y-8">

    {{-- Title --}}
    <div class="text-center space-y-2">
        <h1 class="text-3xl font-bold">
            Track Your Parcel
        </h1>
        <p class="text-gray-500">
            Enter your tracking number to check latest status
        </p>
    </div>

    {{-- Search Box --}}
    <div class="flex gap-2">
        <input
            type="text"
            wire:model.defer="trackingNumber"
            placeholder="e.g. MY123456789"
            class="flex-1 rounded-sm border border-gray-300 px-4 py-4 text-lg
                   focus:outline-none focus:ring-2 focus:ring-black"
        />

        <button
            wire:click="search"
            class="rounded-sm bg-black px-6 py-4 text-white font-semibold
                   hover:bg-gray-800 transition">
            Track
        </button>
    </div>

    {{-- Result --}}
    @if($searched)
        @if($parcel)
            <div class="rounded-2xl bg-white shadow p-6 space-y-3">
                <div class="flex justify-between">
                    <span class="text-gray-500">Tracking No</span>
                    <span class="font-medium">{{ $parcel->tracking_no }}</span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-500">Status</span>
                    <span class="font-semibold text-green-600">
                        {{ $parcel->status }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-500">Last Update</span>
                    <span>
                        {{ $parcel->updated_at->format('d M Y, h:i A') }}
                    </span>
                </div>
            </div>
        @else
            <div class="text-center text-red-500">
                Tracking number not found.
            </div>
        @endif
    @endif

    @if($parcel)
    <div class="mt-6 bg-white rounded-2xl shadow p-6">
        <h3 class="font-semibold mb-4 text-center">
            Parcel Status
        </h3>

        <div class="flex items-center justify-between">
            @foreach($parcel->timelineSteps() as $index => $step)
                <div class="flex-1 flex flex-col items-center text-center">
                    
                    {{-- Circle --}}
                    <div class="
                        w-10 h-10 rounded-full flex items-center justify-center
                        {{ $parcel->isStepCompleted($step['key'])
                            ? 'bg-green-600 text-white'
                            : 'bg-gray-300 text-gray-500' }}">
                        {{ $index + 1 }}
                    </div>

                    {{-- Label --}}
                    <span class="mt-2 text-sm">
                        {{ $step['label'] }}
                    </span>
                </div>

                {{-- Line --}}
                @if(!$loop->last)
                    <div class="flex-1 h-1
                        {{ $parcel->isStepCompleted($step['key'])
                            ? 'bg-green-600'
                            : 'bg-gray-300' }}">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endif


</div>
