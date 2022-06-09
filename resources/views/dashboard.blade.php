<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="cotainer card-body">
                <h3>List witout Jquery</h3>
                <ul class="list-group">
                    @foreach ($jsonlist as $item)
                    <x-ul-list :item=$item>
                    </x-ul-list>


                    @endforeach
                </ul>
            </div>
            {{-- <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-json-text />
            </div> --}}
        </div>
    </div>

</x-app-layout>
