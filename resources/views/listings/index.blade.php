<x-layout> 
    @include('partials._Hero')
    @include('partials._Search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($Listings) == 0)
            @foreach ($Listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p> no Listings </p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{$Listings->links()}}

    </div>
</x-layout>